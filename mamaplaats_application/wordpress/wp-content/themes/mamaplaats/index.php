<?php get_header(); ?>
<?php $max_num_pages = $wp_query->max_num_pages; ?>
<div id="container">
	<div id="leftcolumn">
		<div class="box">
			<div class="fill">
				<h2 class="themehead icon-blogs"><?php if ( is_category() ):
					echo single_cat_title();
				elseif ( is_day() ):
					printf( __('Dagelijks Archief voor %s'), get_the_time( __('F jS, Y') ) );
				elseif ( is_month() ):
					printf( __('Maandelijks Archief voor %s'), get_the_time( __('F, Y') ) );
				elseif ( is_year() ):
					printf( __('Jaarlijks Archief voor %s'), get_the_time( __('Y') ) );
				elseif ( is_search() ):
					printf( __('Zoek resultaten voor \'%s\''), attribute_escape( get_search_query() ) );
				elseif ( is_tag() ):
					printf( __('Tag Archief voor \'%s\''), single_tag_title('', false) );
				elseif ( is_author() ):
					printf( __('Blogs van %s'), get_author_name( get_query_var('author') ) );
				elseif ( is_paged() and ( intval(get_query_var('paged')) > 1) ):
					__('Archive');
				endif; 
                                
                                add_filter( 'wp_title', 'filter_function_name', 10, 3 );
                                
                                ?></h2>

                            
				<div class="themecontent">
					<?php while (have_posts()) : the_post(); ?>
					<div class="widgetthemebox-<?php echo $active_parent ?> <?php the_author_meta('blogger_type'); ?>">
						<div class="entry">
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(array(80,80)); ?>
							<?php else: ?>
							<img src="<?php echo get_first_image() ?>" width="80" height="80" alt="<?php the_title()?>"/>
							<?php endif ?>
							<div class="themebubble-<?php echo $active_parent ?>"><span><?php echo $active_parent ?></span></div>
							<div class="icon">
								<h3 class="theme-head-<?php echo $active_parent ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<p class="author author-<?php echo $active_parent ?>">Geschreven door <?php echo the_author_posts_link() ?> op <?php the_time('j F Y') ?></p>
							</div>
                            <div class='cat-description'>
                                <p class="excerpt"><?php echo improved_excerpt(160); ?></p>
                            </div>
						</div></div>
					<!--end entry-->
					<?php endwhile; ?>
				</div>
				<!--end themecontent-->

				<div class="divider"></div>
                                
                                <div class="navigation">
					<?php
					$big = 999999999;
					echo paginate_links(array(
						'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format' => '/page/%#%',
						'current' => max(1, get_query_var('paged')),
						'total' => $max_num_pages,
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