<?php
get_header();

$cat = get_category_by_slug($post->post_title);
$subcats = get_categories('parent='.$cat->cat_ID);
?>
<div id="container">
	<div id="leftcolumn">

		<div class="box">
			<div class="fill">

				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p class="breadcrumbs">','</p>');
				} ?>

				<div class="divider"></div>

				<h3 class="more"><a href="<?php echo get_category_link($cat->term_id) ?>">Meer <?php echo $post->post_title ?></a></h3>
                <h2 class="themehead icon-winactions"><?php echo $post->post_title; ?></h2>
				<p class="theme-intro full"><?php echo $post->post_content ?></p>
				<div class="clear"></div>

            <?php
                $args = array(
                    'category__in'=> $cat->cat_ID,
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                query_posts($args);

                if (have_posts()):
            ?>

				<div class="themecontent winactie">
					<?php while (have_posts()) : the_post(); ?>
					<?php $post_category = get_the_category(); ?>
				    <div class="widgetthemebox-winacties">
						<div class="entry">
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(array(80,80)); ?>
							<?php else: ?>
							<img src="<?php echo get_first_image() ?>" width="80" height="80" alt="<?php the_title()?>"/>
							<?php endif ?>
							<a href="<?php the_permalink() ?>#commentlist" class="comment-bubble"><?php echo get_comments_number() ?></a>
							<div class="label-author">
								<h3 class="theme-head-winacties"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<p class="author author-winacties">Geschreven door <?php echo the_author_posts_link() ?> op <?php the_time('j F Y') ?></p>
								<p class="excerpt"><?php echo improved_excerpt(160); ?></p>
							</div>
						</div>
				    </div>
				    <!--end entry-->
					<?php endwhile; ?>
				</div>
				<!--end themecontent-->

				<div class="divider"></div>
            <?php
            endif; // have posts main category

            foreach($subcats as $category_child):
                $args = array(
                    'cat'=> $category_child->cat_ID,
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                query_posts($args);

                if (have_posts()):
            ?>
                <h3 class="more"><a href="<?php echo get_category_link($category_child->term_id) ?>">Meer <?php echo $category_child->name ?></a></h3>
				<h2 class="themehead icon-blogs">Laatste <?php echo $category_child->name ?></h2>

				<div class="themecontent winactie">
						<?php while (have_posts()) : the_post(); ?>
						<div class="widgetthemebox-winacties">
							<div class="entry">
								<?php if(has_post_thumbnail()): ?>
								<?php the_post_thumbnail(array(80,80)); ?>
								<?php else: ?>
								<img src="<?php echo get_first_image() ?>" width="80" height="80" alt="<?php the_title()?>"/>
								<?php endif ?>
								<a href="<?php the_permalink() ?>#commentlist" class="comment-bubble"><?php echo get_comments_number() ?></a>
								<div class="label-author">
									<h3 class="theme-head-winacties"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<p class="author author-winacties">Geschreven door <?php echo the_author_posts_link() ?> op <?php the_time('j F Y') ?></p>
									<p class="excerpt"><?php echo improved_excerpt(220); ?></p>
								</div>
							</div>
						</div>
						<!--end entry-->
						<?php endwhile; ?>
				</div>
				<!--end themecontent-->

				<div class="divider"></div>
<?php
                endif;
            endforeach;
?>

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