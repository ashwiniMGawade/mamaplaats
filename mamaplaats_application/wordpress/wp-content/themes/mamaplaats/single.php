            <?php get_header(); ?>
			<?php
				// Get author data
				$author_id = get_the_author_meta('ID');
				$author_avatar = ext_get_avatar($authordata->ID, 100, '', false, false, $authordata->user_email);
				$author_profile = get_author_posts_url($authordata->ID, $authordata->user_nicename);
				$author_points = get_user_level_html(get_the_author_meta('ID'));
				$author_follow =  get_follow_button_status($author_id)

			?>
			<div id="container">

				<div id="leftcolumn">

					<div class="box">
						<div class="fill">
							<?php if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p class="breadcrumbs">','</p>');
							} ?>
							<div class="divider"></div>
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<?php  ?>
							<div class="singelthemecontent">
								<div class="entry">
									<h1 class="post-head"><?php echo get_post_type_name(wp_get_post_tags(get_the_ID())) ?><?php the_title(); ?></h1>
									<?php if(has_post_thumbnail()): ?><div class="imagespacer"><?php the_post_thumbnail(array(120,160)); ?></div><?php endif ?>
									<div class="label-author">
										<a href="#commentlist" class="comment-bubble"><?php echo get_comments_number() ?></a>
										<p class="author">Geschreven door</p>
										<div style="display: inline" class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $authordata->display_name; ?></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<li role="presentation"><a href="<?php echo $author_profile ?>" tabindex="-1" role="menuitem"><i class="icon-user"></i> Ga naar Profiel</a></li>
												<li role="presentation"><a href="/gebruiker/berichten/nieuw?to=<?php echo $authordata->user_nicename ?>" tabindex="-1" role="menuitem"><i class="icon-envelope"></i> Stuur een Bericht</a></li>
												<?php if ($author_follow AND $author_follow['is_following']): ?>
												<li role="presentation"><a data-following-id="<?php echo $author_id ?>" href="#" class="toggle_follow" tabindex="-1" role="menuitem"><i class="icon-star"></i> Stoppen met Volgen</a></li>
												<?php elseif ($author_follow AND ! $author_follow['is_following']): ?>
												<li role="presentation"><a data-following-id="<?php echo $author_id ?>" href="#" class="toggle_follow" tabindex="-1" role="menuitem"><i class="icon-star"></i> Wil ik Volgen</a></li>
												<?php endif; ?>
											</ul>
										</div>
										<span>
											op <?php the_time('j F Y') ?><br />
											<?php echo $author_points ?>
										</span><br /><br />
                                        <span class="clearer"></span>
										<div class="short_description">
											<?php echo improved_excerpt(500); ?>
										</div>
                                    </div>
                                    <?php do_action('top3'); ?>
                                    <?php the_content(); ?>
									<br />
									<!-- AddThis Button BEGIN -->
									<div class="addthis_toolbox addthis_default_style">
										<a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="140"></a>
										<a class="addthis_button_tweet"></a>
										<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
										<a class="addthis_button_email"></a>
									</div>
									<!-- AddThis Button END -->
									<div class='blog-navigation-footer'>
										<?php if($category[0]->cat_ID != 19): ?>
										<div class='blog-all right'>
											<a class="author-link" href='<?php echo get_author_posts_url( $authordata->ID, $authordata->user_nicename ); ?>'>
												alle blogs van deze schrijfster &#62;
											</a>
										</div>
										<?php endif; ?>
										<div class='blog-navigation-prev_next'>
										<?php
										$category = get_the_category();
										if($category[0]->cat_ID != 19){
											previous_post_link('<div class="prev">&laquo; Blog: %link</div>', '%title', 1);
											next_post_link('<div class="next">Blog: %link &raquo;</div>', '%title', 1);
										} else {
											$prev = get_post_url(true, void, true);
											$next = get_post_url(true, void, false);
											echo ($prev) ? "<a class='left' href='$prev' rel='prev'>&#60; vorige winactie</a>" : "<span class='grey left'>&#60; vorige winactie</span>";
											echo ($next) ? "<a class='right' href='$next' rel='next'>volgende winactie &#62;</a>" : "<span class='grey right'>volgende winactie &#62;</span>";
										}
										?>
										</div>
										<div class='clearer'></div>
									</div>
								</div><!--end entry-->
							</div><!--end themecontent-->
							<div class="divider"></div>

							<h2 id="commentlist" class="themehead icon-blogs">Over <?php echo $authordata->display_name; ?></h2>
							<div class="about-the-author">
								<?php echo $author_avatar ?>
								<?php if ( ! empty($authordata->biography)) : ?>
								<p><?php echo $authordata->biography; ?></p>
								<?php else: ?>
								<p class="nocomments" style="margin-left: 120px;">Deze blogster heeft nog geen biografie</p>
								<?php endif ?>
								<br />
								<?php if ($author_follow AND $author_follow['is_following']): ?>
								<button data-following-id="<?php echo $author_id ?>" class="btn btn-pink-mamaplaats active toggle_follow">Wordt Gevolgd</button>
								<?php elseif ($author_follow AND ! $author_follow['is_following']): ?>
								<button data-following-id="<?php echo $author_id ?>" class="btn btn-pink-mamaplaats toggle_follow">Volgen</button>
								<?php endif; ?>
								<a class="btn" href="<?php echo $author_profile ?>">Ga naar Profiel</a>
							</div>
							<div class="divider"></div>

							<?php if ($posttags = get_the_tags()): ?>
							<?php
								$tags_arr = array();
								foreach($posttags as $tag)
								{
									$tags_arr[] = $tag->slug;
								}

								$args = array(
									'orderby' => 'date',
									'order' => 'desc',
									'post__not_in' => array($post->ID),
									'posts_per_page'  => 3,
									'caller_get_posts' => 1,
									'tag_slug__in' => $tags_arr
								);

								$tag_posts = get_posts($args);
							?>
							<h2 id="commentlist" class="themehead icon-blogs">Lees ook</h2>
							<ul class="seealso">
								<?php foreach($tag_posts as $tag_post): ?>
								<li>
									<a href="<?php echo get_permalink($tag_post) ?>">
										<h3><?php echo $tag_post->post_title ?></h3>
										<?php echo get_the_post_thumbnail($tag_post->ID, array(40,40)); ?>
										<p><?php echo improved_excerpt(70, $tag_post) ?></p>
									</a>
								</li>
								<?php endforeach ?>
							</ul>
							<div class="divider"></div>
							<?php endif; ?>
							<!-- comments -->
							<?php comments_template(); ?>

							<?php endwhile; ?>
							<?php endif; ?>
						</div><!--end fill-->
						<div class="bottom"></div>

					</div><!--end box-->
				</div><!--end leftcolumn-->
				<?php get_sidebar(); ?>

				<div class="clear"></div>
			</div><!--end container-->
			<div id="push"></div>
			<?php get_footer(); ?>
