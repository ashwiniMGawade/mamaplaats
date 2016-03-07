<?php defined('SYSPATH') or die('No direct script access.');

class Model_WP_Post extends Model_WP
{
	protected $_table_name  = 'wp_posts';

	protected $_data = array(
		'ID' 					=> NULL,
		'post_author' 			=> 0,
		'post_date' 			=> '',
		'post_date_gmt' 		=> '',
		'post_content' 			=> '',
		'post_title' 			=> '',
		'post_excerpt' 			=> '',
		'post_status' 			=> 'publish',
		'comment_status' 		=> 'open',
		'ping_status' 			=> 'open',
		'post_password' 		=> '',
		'post_name' 			=> '',
		'to_ping' 				=> '',
		'pinged' 				=> '',
		'post_modified' 		=> '',
		'post_modified_gmt' 	=> '',
		'post_content_filtered' => '',
		'post_parent' 			=> 0,
		'guid' 					=> '',
		'menu_order' 			=> 0,
		'post_type' 			=> 'post',
		'post_mime_type' 		=> '',
		'comment_count' 		=> 0,
	);

	protected $_rules = array(
		'post_title' 			=> array(array('not_empty'), array('max_length', array(':value', 40))),
		'post_excerpt' 			=> array(array('not_empty'), array('min_words', array(':value', 3))),
		'post_content' 			=> array(array('not_empty'), array('min_words', array(':value', 200))),
	);

	public $post_category;
	public $post_tag;
	public $post_thumbnail;

	public function __construct($id = NULL, $native = NULL)
	{
		parent::__construct($id);

		if ($this->ID !== NULL AND empty($native))
		{
			$this->post_category 	= $this->_get_post_category($this->ID);
			$this->post_tag 		= $this->_get_post_tag($this->ID);
			$this->post_thumbnail 	= $this->_get_post_thumbnail($this->ID);
		}
	}

	public function get_all_published_post()
	{
		return $this->_db->query(Database::SELECT, "
			SELECT ID, post_author
			FROM wp_posts
			WHERE post_status = 'publish'
			AND post_type = 'post'
		")->as_array();
	}

	public function get_post_tag($post_id)
	{
		return $this->_db->query(Database::SELECT, "
			SELECT t.slug
			FROM wp_posts AS p
			LEFT JOIN wp_postmeta AS pm ON p.ID = pm.post_id
			LEFT JOIN wp_term_relationships AS tr ON p.ID = tr.object_id
			LEFT JOIN wp_term_taxonomy AS tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
			LEFT JOIN wp_terms AS t ON tt.term_id = t.term_id
			WHERE p.ID = $post_id
			AND tt.taxonomy = 'post_tag'
			AND t.slug IN ('post_short', 'post_picture', 'post_video', 'post')
			GROUP BY p.ID
			LIMIT 1
		")->as_array();
	}

	public function get_from_author($author_id, $page)
	{
		// Query for the needed posts
		query_posts(array('author' => $author_id, 'paged' => $page, 'post_status' => 'any'));
		$posts = $this->_build_post_information();
		wp_reset_query();

		return ( ! empty($posts)) ? $posts : array();
	}

	public function get_post_count($author_id)
	{
		$query = DB::select(array(DB::expr('COUNT(*)'), 'count'))
				->where('post_author', '=', $author_id)
				->and_where('post_type', '=', 'post')
				->and_where('post_status', '=', 'publish');

		return $this->load($query, 1);
	}

	public function get_post_categories()
	{
		return wp_dropdown_categories(array(
			'hierarchical' => 1,
			'name' => 'post_category',
			'id' => 'post_category',
			'class' => 'span12',
			'echo' => 0,
			'selected' => $this->post_category
		));
	}

	public function set_fields(array $data)
	{
		$post_types = array('post', 'post_short', 'post_video', 'post_picture');
		if ( ! in_array($data['post_type'], $post_types))
		{
			$data['post_type'] = 'post';
		}

		return parent::set_fields($data);
	}

	public function save($validation = NULL)
	{
		// Add some labels to the validation
		$validation = Validation::factory($this->_data);
		$validation->label('/uploads/', '3 or more images');
		$validation->label('youtu', 'an youtube video');

		$this->_correct_rules_before_saving();
		$status = $this->_validated ? TRUE : $this->is_valid($validation);

		$post_array = array(
			'post_author' => $this->post_author,
			'post_title' => $this->post_title,
			'post_excerpt' => $this->post_excerpt,
			'post_content' => $this->post_content,
			'post_category' => array($this->post_category),
			'post_status' => $this->post_status,
			'tags_input' => $this->post_type
		);

		if ($this->state() == AutoModeler::STATE_LOADED) // Do an update
		{
			wp_update_post(array_merge($post_array, array('ID' => $this->ID)));
		}
		else // Do an insert
		{
			$result = wp_insert_post($post_array);
			$this->_data['ID'] = $result;
		}

		$this->_add_post_thumbnail();

		// Resave as draft when error and resave as draft else publish the post
		if ($status !== TRUE OR empty($this->post_category) OR empty($this->post_thumbnail['id']))
		{
			wp_update_post(array_merge($post_array, array('ID' => $this->ID, 'post_status' => 'draft')));
		}
		elseif ($this->post_status == 'published')
		{
			wp_publish_post($this->ID);
		}

		if (empty($this->post_category))
		{
			throw new AutoModeler_Exception('no_thumbnail', array(), array('no_thumbnail' => 'Je moet nog een categorie selecteren.'));
		}

		if (empty($this->post_thumbnail['id']))
		{
			throw new AutoModeler_Exception('no_thumbnail', array(), array('no_thumbnail' => 'Je moet nog een uitgelichte foto selecteren.'));
		}

		if ($status !== TRUE)
		{
			throw new AutoModeler_Exception($status['string'], array(), $status['errors']);
		}

		if ($status === TRUE AND !empty($this->post_type) AND !empty($this->post_author))
		{
			if(class_exists('Model_Point_Trigger'))
			{
				// do to wordpress gmt bug we reset the timezone back to amsterdam
				date_default_timezone_set('Europe/Amsterdam');
				$trigger_model = new Model_Point_Trigger();
				$trigger_model->trigger_save($this->post_type, $this->post_author, 'post_'.$this->_data['ID']);
			}
		}

		return $this->_data['ID'];
	}

	public function get_popular_posts_between_dates($start_date, $end_date)
	{
		$start_date = $this->_db->escape($start_date.' 00:00:00');
		$end_date = $this->_db->escape($end_date.' 23:59:59');

		return $this->_db->query(Database::SELECT, "
			SELECT wp_posts.post_title, wp_posts.post_excerpt, wp_posts.post_content,
			wp_posts.post_date_gmt, wp_posts.guid, thumb.guid AS thumb
			FROM wp_posts
			LEFT JOIN wp_postmeta ON (wp_posts.ID = wp_postmeta.post_id AND meta_key = '_thumbnail_id')
			LEFT JOIN wp_posts thumb ON (wp_postmeta.meta_value = thumb.ID)
			WHERE (wp_posts.post_date BETWEEN ".$start_date." AND ".$end_date.")
			AND wp_posts.post_type = 'post'
			AND wp_posts.ID NOT IN (
				SELECT object_id
				FROM wp_term_relationships
				LEFT JOIN wp_term_taxonomy ON (wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id)
				WHERE wp_term_taxonomy.taxonomy = 'category'
				AND wp_term_taxonomy.term_id IN (19, 614)
			)
			ORDER BY wp_posts.comment_count DESC
		");
	}

	private function _add_post_thumbnail()
	{
		if ($this->ID === NULL OR ! is_uploaded_file($_FILES['image-upload']['tmp_name']))
		{
			return FALSE;
		}

		// Include the wordpress media Handler
		require_once('wordpress/wp-admin/includes/media.php');
		require_once('wordpress/wp-admin/includes/file.php');
		require_once('wordpress/wp-admin/includes/image.php');

		$image_id = media_handle_upload('image-upload', $this->ID);
		if ( ! empty($image_id) && $image_id > 0)
		{
			delete_post_meta($this->ID, '_thumbnail_id');
			add_post_meta($this->ID, '_thumbnail_id', $image_id, true);

			$tmp_attachement = wp_get_attachment_image_src($image_id, 'thumbnail');
			$this->post_thumbnail = array('id' => $image_id, 'src' => $tmp_attachement[0]);

			return TRUE;
		}

		return FALSE;
	}

	private function _correct_rules_before_saving()
	{
		if ($this->post_tag == 'post_short')
		{
			$this->_rules['post_content'] = array(array('not_empty'), array('max_words', array(':value', 100)));
		}
		elseif ($this->post_tag == 'post_picture')
		{
			$this->_rules['post_content'] = array(array('not_empty'), array('contains', array(':value', '/uploads/', 3)));
		}
		elseif ($this->post_tag == 'post_video')
		{
			$this->_rules['post_content'] = array(array('not_empty'), array('contains', array(':value', 'youtu')));
		}
	}
}