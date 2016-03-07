<?php get_header(); ?>
<?php
	$category_slug = get_query_var('category_name');
	$active_parent = get_active();
	$on_parent_category = ($category_slug == $active_parent AND $active_parent != 'winacties');
	$change_types = array('blog' => 'post', 'short' => 'post_short', 'picture' => 'post_picture', 'video' => 'post_video');
	$page_type = (isset($_GET['type']) AND array_key_exists($_GET['type'], $change_types)) ? $change_types[$_GET['type']] : 'all';
?>
<div id="container">
	<div id="leftcolumn">
		<div class="box">
			<div class="fill">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p class="breadcrumbs">','</p>');
				} ?>
				<div class="divider"></div>
				<div class="category-top">
					<h2 class="label">Alles over <?php single_cat_title(); ?></h2>
					<h1 class="category-head"><?php single_cat_title(); ?></h1>

					<div class="theme-intro theme-intro-category-list">
						<?php echo category_description(); ?>
					</div>

					<?php if ($on_parent_category) : ?>
					<div class="clear divider"></div>
					<div class="gadgets homepage">
						<?php
						if(function_exists('dynamic_sidebar')){
							dynamic_sidebar('Homepage Gadgets');
						}
						?>
					</div>
					<div class="clear divider"></div>
					<h2 class="themehead icon-blogs">Lees Blogs voor en door moeders</h2>
					<div class="themecontent category-list">
						<?php echo the_extra_category_content(); ?>
						<div class="clear"></div>
					</div><!--end themecontent-->
					<?php endif ?>

					<div class="tabbable category-menu">
						<ul>
							<li <?php if($page_type == 'all'): ?>class="active"<?php endif ?>><a href="?type=all">Alles</a></li>
							<li <?php if($page_type == 'post'): ?>class="active"<?php endif ?>><a href="?type=blog">Blogs</a></li>
							<li <?php if($page_type == 'post_short'): ?>class="active"<?php endif ?>><a href="?type=short">Vraag</a></li>
							<li <?php if($page_type == 'post_picture'): ?>class="active"<?php endif ?>><a href="?type=picture">Foto</a></li>
							<li <?php if($page_type == 'post_video'): ?>class="active"<?php endif ?>><a href="?type=video">Video</a></li>
						</ul>
					</div>
				</div>
				<div class="clear divider"></div>
				<?php if (have_posts()): ?>
				<h2 class="themehead icon-blogs">Nieuwste <?php single_cat_title(); ?> Blogs</h2>
				<div class="themecontent">
					<?php

						$query = $wp_query->query;
						if ($on_parent_category)
						{
							$query = array_merge(array('posts_per_page' => 5), $query);
						}

						if ($page_type == 'post')
						{
							$post_short_tag = get_term_by('slug', 'post_short','post_tag');
							$post_picture_tag = get_term_by('slug', 'post_picture','post_tag');
							$post_video_tag = get_term_by('slug', 'post_video','post_tag');

							$tag_ids = array($post_short_tag->term_id, $post_picture_tag->term_id, $post_video_tag->term_id);
							$query = array_merge(array('tag__not_in' => $tag_ids), $query);
						}
						elseif ($page_type != 'all')
						{
							$query = array_merge(array('tag' => $page_type), $query);
						}

						query_posts($query);
					?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $post_category = get_the_category(); ?>
					<div class="widgetthemebox-<?php echo $active_parent ?> <?php the_author_meta('blogger_type'); ?>">
						<div class="entry">
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(array(80,80)); ?>
							<?php else: ?>
							<img src="<?php echo get_first_image() ?>" width="80" height="80" alt="<?php the_title()?>"/>
							<?php endif ?>
							<div class="themebubble-<?php echo $active_parent ?>"><span><?php echo $active_parent ?></span></div>
							<div class="icon">
								<h3 class="theme-head-<?php echo $active_parent ?>">
									<a href="<?php the_permalink() ?>"><?php echo get_post_type_name(wp_get_post_tags(get_the_ID())) ?><?php the_title(); ?></a>
								</h3>
								<p class="author author-<?php echo $active_parent ?>">Geschreven door <?php echo the_author_posts_link() ?> op <?php the_time('j F Y') ?></p>
							</div>
							<div class="cat-description">
								<p class="excerpt"><?php echo improved_excerpt(160); ?></p>
							</div>
						</div>
					</div>
					<!--end entry-->
					<?php endwhile; ?>
					<?php if ( ! have_posts()) : ?>
					<p class="nocomments">We hebben geen blogs van dit type kunnen vinden in deze categorie.</p>
					<?php endif ?>
				</div>
				<!--end themecontent-->

				<div class="divider"></div>
				<?php endif; ?>

				<div class="navigation">
					<?php
					$big = 999999999;
					echo paginate_links(array(
						'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format' => '/page/%#%',
						'current' => max(1, get_query_var('paged')),
						'total' => $wp_query->max_num_pages,
						'mid_size' => 5,
						'end_size' => 1
					));
					?>
				</div>

			</div>
			<!--end fill-->
			<div class="bottom"></div>
		</div>
		<!--end box-->
	</div>
	<!--end leftcolumn-->
	<?php get_sidebar(); ?>


	<div class="clear"></div>
</div><!--end container-->

<div id="push"></div>
<?php get_footer(); ?>