<?php defined('SYSPATH') or die('No direct script access.');

abstract class Model_WP extends AutoModeler_ORM
{
	public function __construct($id = NULL)
	{
		parent::__construct();

		if ($id !== NULL AND $id !== 0)
		{
			$this->load(DB::select_array($this->fields())->where($this->_table_name.'.ID', '=', $id));
		}
		elseif ($this->ID) // We loaded this via mysql_result_object
		{
			$this->_state = AutoModeler::STATE_LOADED;
		}
	}

	public function process_load_state()
	{
		if ($this->ID)
		{
			$this->_state = AutoModeler::STATE_LOADED;
		}
		else
		{
			$this->_state = AutoModeler::STATE_NEW;
		}
	}

	public function save($validation = NULL)
	{
		$status = $this->_validated ? TRUE : $this->is_valid($validation);

		if ($status === TRUE)
		{
			if ($this->state() == AutoModeler::STATE_LOADED) // Do an update
			{
				return count(DB::update($this->_table_name)->set(array_diff_assoc($this->_data, array('ID' => $this->_data['ID'])))->where('ID', '=', $this->_data['ID'])->execute($this->_db));
			}
			else // Do an insert
			{
				$columns = array_keys($this->_data);
				$id = DB::insert($this->_table_name)
					->columns($columns)
					->values($this->_data)->execute($this->_db);

				$this->state(AutoModeler::STATE_LOADED);

				return ($this->_data['ID'] = $id[0]);
			}
		}

		throw new AutoModeler_Exception($status['string'], array(), $status['errors']);
	}

	protected function _build_post_information()
	{
		if ( ! have_posts())
			return FALSE;

		$data = array();

		while (have_posts())
		{
			the_post();

			$item = array();

			ob_start();
			previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' );
			$item['previous_post_link'] = ob_get_contents();
			ob_end_clean();

			ob_start();
			next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' );
			$item['next_post_link'] = ob_get_contents();
			ob_end_clean();

			$item['posted_on'] = get_the_date();
			$item['author'] = get_the_author();

			if (($has_author_meta = (bool)get_the_author_meta('description')) === TRUE)
			{
				$item['avatar'] = get_avatar(get_the_author_meta('user_email' ), apply_filters('twentyten_author_bio_avatar_size', 60));
				$item['author_description'] = sprintf(esc_attr__('About %s', 'twentyten'), get_the_author());
				$item['author_description'] = get_the_author_meta('description');
				$item['author_url'] = get_author_posts_url(get_the_author_meta('ID'));
				$item['author_all_posts'] = sprintf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten'), get_the_author());
			}

			ob_start();
			the_ID();
			$item['the_ID'] = ob_get_contents();
			ob_end_clean();

			ob_start();
			post_class();
			$item['post_class'] = ob_get_contents();
			ob_end_clean();


			$item['post_status'] = get_post_status();
			$item['is_front_page'] = is_front_page();

			ob_start();
			the_title();
			$item['the_title'] = ob_get_contents();
			ob_end_clean();

			$thumbnail_info = $this->_get_post_thumbnail($item['the_ID']);
			$item['the_post_thumbnail'] = $thumbnail_info['src'];

			$item['the_comments_number'] = get_comments_number();
			$item['the_excerpt'] = improved_excerpt();
			$item['the_permalink'] = get_permalink();

			ob_start();
			the_content();
			$item['the_content'] = ob_get_contents();
			ob_end_clean();

			ob_start();
			wp_link_pages(array('before' => '<div class="page-link">'.__('Pages:', 'twentyten'), 'after' => '</div>'));
			$item['wp_link_pages'] = ob_get_contents();
			ob_end_clean();

			ob_start();
			edit_post_link( __('Edit', 'twentyten'), '<span class="edit-link">', '</span>');
			$item['edit_post_link'] = ob_get_contents();
			ob_end_clean();

			ob_start();
			comments_template( '', true );
			$item['comments_template'] = ob_get_contents();
			ob_end_clean();

			$data[] = $item;
		}

		return $data;
	}

	protected function _get_post_thumbnail($post_id)
	{
		// First get the selected post image
		$selected_thumb_id = get_post_meta($post_id, '_thumbnail_id', true);
		$images = get_children(array(
			'post_parent' => $this->ID,
			'post_type' => 'attachment',
			'order' => 'DESC',
			'numberposts' => 0,
			'post_mime_type' => 'image'
		));

		foreach ($images as $image)
		{
			$tmp_attachement = wp_get_attachment_image_src($image->ID, 'thumbnail');
			if ($selected_thumb_id == $image->ID)
			{
				return array('id' => $image->ID, 'src' => $tmp_attachement[0]);
			}
		}

		return array('id' => NULL, 'src' => '');
	}

	protected function _get_post_tag($post_id)
	{
		foreach (wp_get_post_terms($post_id) as $post_tag)
		{
			if (in_array($post_tag->name, array('post', 'post_short', 'post_picture', 'post_video')))
			{
				return $post_tag->name;
			}
		}

		return '';
	}

	protected function _get_post_category($post_id)
	{
		$categories = wp_get_post_categories($post_id);
		return $categories[0];
	}
}