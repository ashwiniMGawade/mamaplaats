			<?php get_header(); ?>
			<div id="container">

				<div id="leftcolumn_voordeelclub">
					<div class="box_voordeelclub">
						<div class="fill_voordeelclub">

							<?php if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p class="breadcrumbs">','</p>');
							} ?>

							<div class="divider"></div>
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<div class="themecontent">
								<div class="entry">
									<?php the_content(); ?>
								</div><!--end entry-->
							</div><!--end themecontent-->

                                                            <?php
                                                                $posttags = get_the_tags();

                                                                if ($posttags) {

                                                                    $tags_arr = array();
                                                                    foreach($posttags as $tag) {
                                                                        $tags_arr[] = $tag->slug;
                                                                    }

                                                                    $args = array(
                                                                        'orderby' => 'date',
                                                                        'order' => 'desc',
                                                                        'post__not_in' => array($post->ID),
                                                                        'posts_per_page'  => 3  ,
                                                                        'caller_get_posts' => 1,
                                                                        'tag_slug__in' => $tags_arr
                                                                    );

                                                                    query_posts($args);
                                                                    
                                                                    if (!have_posts()) :
                                                                        $args = array(
                                                                           'showposts'=>3,
                                                                            'post__not_in' => array($post->ID),
                                                                            'caller_get_posts'=>1
                                                                        );
                                                                        query_posts($args);
                                                                    endif;
                                                                    
                                                                    if (have_posts()) :
                                                                        ?>
                                                                        <div class="relatedcontent">
                                                                            <div class="divider"></div>
                                                                            <h2 id="commentlist" class="themehead icon-blogs"">Lees ook</h2>

                                                                            <ul id="readmore">
                                                                                <?php while (have_posts()) : the_post(); ?>
                                                                                <li><div class="relatedcontentlink"><a title="<?php the_title();?>" href="<?php the_permalink() ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?> </a></div></li>
                                                                                <?php endwhile ?>
                                                                            </ul>
                                                                        </div>
                                                                        <?php
                                                                    endif;
                                                                    wp_reset_query();
                                                                }
                                                            ?>



							<!-- comments -->
							<?php //comments_template(); ?>

							<?php endwhile; ?>
							<?php endif; ?>
						</div><!--end fill-->   

					</div><!--end box-->

				</div><!--end leftcolumn-->
				<?php //get_sidebar(); ?>

				<div class="clear"></div>
			</div><!--end container-->

			<div id="push"></div>
			<?php get_footer(); ?>