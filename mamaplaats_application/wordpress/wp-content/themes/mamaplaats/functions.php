<?php

// add theme mods
add_theme_support('post-thumbnails');

// Add The Advise, Expert and Win post type
add_action('init', 'create_post_type');
function create_post_type()
{
	register_post_type('advise', array(
		'labels' => array(
			'name' 			=> __('Adviesen'),
			'singular_name' => __('Advies')
		),
		'show_ui' 		=> TRUE,
		'menu_position' => 5,
		'public' 		=> TRUE,
		'has_archive' 	=> TRUE,
		'capability_type' => 'post',
		'hierarchical' 	=> FALSE,
		'supports' 		=> array('title', 'editor', 'excerpt', 'custom-fields', 'comments', 'thumbnail', 'author'),
		'rewrite' 		=> array('slug' => 'advise'),
		'taxonomies' 	=> array('category', 'post_tag'),
	));

	register_post_type('expert', array(
		'labels' => array(
			'name' 			=> __('Expert'),
			'singular_name' => __('Expert')
		),
		'show_ui' 		=> TRUE,
		'menu_position' => 5,
		'public' 		=> TRUE,
		'has_archive' 	=> TRUE,
		'capability_type' => 'post',
		'hierarchical' 	=> FALSE,
		'supports' 		=> array('title', 'editor', 'excerpt', 'custom-fields', 'comments', 'thumbnail', 'author'),
		'rewrite' 		=> array('slug' => 'expert'),
		'taxonomies' 	=> array('category', 'post_tag'),
	));

	register_post_type('win', array(
		'labels' => array(
			'name' 			=> __('Win'),
			'singular_name' => __('Win')
		),
		'show_ui' 		=> TRUE,
		'menu_position' => 5,
		'public' 		=> TRUE,
		'has_archive' 	=> TRUE,
		'capability_type' => 'post',
		'hierarchical' 	=> FALSE,
		'supports' 		=> array('title', 'editor', 'excerpt', 'custom-fields', 'comments', 'thumbnail', 'author'),
		'rewrite' 		=> array('slug' => 'win'),
		'taxonomies' 	=> array('category', 'post_tag'),
	));
}

// Filter the Author list to only show actual authors with posts (else it will show 90.000 users slowing down the page)
add_action('admin_menu', 'fb_remove_author_meta_boxes');
function fb_remove_author_meta_boxes()
{
	remove_meta_box('authordiv', 'post', 'normal');
	remove_meta_box('authordiv', 'advise', 'normal');
	remove_meta_box('authordiv', 'expert', 'normal');
	remove_meta_box('authordiv', 'win', 'normal');
	remove_meta_box('authordiv', 'page', 'normal');

	add_meta_box('fb_authordiv', __('Author'), 'fb_post_author_meta_box', 'post', 'normal', 'default');
	add_meta_box('fb_authordiv', __('Author'), 'fb_post_author_meta_box', 'advise', 'normal', 'default');
	add_meta_box('fb_authordiv', __('Author'), 'fb_post_author_meta_box', 'expert', 'normal', 'default');
	add_meta_box('fb_authordiv', __('Author'), 'fb_post_author_meta_box', 'win', 'normal', 'default');
	add_meta_box('fb_authordiv', __('Author'), 'fb_post_author_meta_box', 'page', 'normal', 'default');
}

function fb_post_author_meta_box($post)
{
	global $wpdb;

	$author_ids = $wpdb->get_col("SELECT post_author FROM {$wpdb->posts} GROUP BY post_author;");
	$authors = join(', ', $author_ids);

	echo '<label class="screen-reader-text" for="post_author_override">'._e('Author').'</label> ';

	wp_dropdown_users(array(
		'include' => $authors,
		'who' => 'authors',
		'name' => 'post_author_override',
		'selected' => empty($post->ID) ? 1 : $post->post_author,
		'include_selected' => true
	));
}

remove_filter('the_content', 'wpautop');

// Stop the wysiwyg editor from stripping out the p tags out of the text
function tinymce_config($init)
{
	$init['wpautop'] = false;
	$init['indent'] = true;
	$init['tadv_noautop'] = true;
	$init['apply_source_formatting'] = true;

	return $init;
}

add_filter('tiny_mce_before_init', 'tinymce_config');