			<?php get_header(); ?>
			<?php
				$order_by_values = array(
					'post_count' => 'Aantal Blogs',
					'display_name' => 'Gebruikers naam',
					'user_registered' => 'Datum Geregistreerd',
				);

				$order_by = ( ! empty($_GET['order_by']) AND array_key_exists($_GET['order_by'], $order_by_values))
					? $_GET['order_by']
					: 'post_count';

				$direction_values = array(
					'DESC' => 'Aflopend',
					'ASC' => 'Oplopend',
				);

				$direction = ( ! empty($_GET['direction']) AND array_key_exists($_GET['direction'], $direction_values))
					? $_GET['direction']
					: 'DESC';
			
			?>
			<div id="container">

				<div id="leftcolumn">

					<div class="box">
						<div class="fill">

							<?php if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p class="breadcrumbs">','</p>');
							} ?>

							<div class="divider"></div>
							<?php
								$current_page = max(1, get_query_var('paged'));
								$users = get_users_with_posts($order_by, $direction, 30, $current_page);
								$user_count = get_users_with_posts($order_by, $direction, 0, 1);
							?>
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<div class="themecontent">
								<div class="entry author-list">
                                    <div class="author-list-filters">
                                        <form method="get" action="">
                                            <select name="order_by" onchange="this.form.submit();">
												<?php foreach($order_by_values as $key => $value): ?>
                                                <option <?php if($key == $order_by): ?>selected="selected"<?php endif ?> value="<?php echo $key ?>"><?php echo $value ?></option>
												<?php endforeach ?>
                                            </select>

                                            <select name="direction" onchange="this.form.submit();">
												<?php foreach($direction_values as $key => $value): ?>
                                                <option <?php if($key == $direction): ?>selected="selected"<?php endif ?> value="<?php echo $key ?>"><?php echo $value ?></option>
												<?php endforeach ?>
                                            </select>
                                        </form>
                                    </div>
									<h2 class="themehead icon-blogs"><?php the_title(); ?></h2>
									<?php foreach($users as $author): ?>
										<div class="author">
											<?php $number_posts = count_user_posts($author->ID) ?>
											<?php $blog_url =  get_author_posts_url($author->ID) ?>
											<?php if($number_posts > 0): ?>
											<a href="<?php echo $blog_url ?>" title="<?php echo ucfirst($author->display_name) ?>">
												<?php echo ext_get_avatar($author->ID, 80); ?>
												<span class="author-name">
													<?php echo (strlen($author->display_name) > 10) ? substr(ucfirst($author->display_name), 0, 10).'...' : ucfirst($author->display_name); ?>
												</span>
												<span class="author-posts"><?php echo $number_posts ?> blogs</span>
											</a>
											<?php endif ?>
										</div>
									<?php endforeach ?>
								</div><!--end entry-->
							</div><!--end themecontent-->

							<div class="divider"></div>

							<?php endwhile; ?>
							<?php endif; ?>
							<div class="navigation">
								<?php
								echo paginate_links( array(
									'base' => '/blogsters%_%',
									'format' => '/page/%#%',
									'prev_text' => __('&laquo;'),
									'next_text' => __('&raquo;'),
									'total' => (count($user_count) / 30) + 1,
									'current' => $current_page,
									'add_args' => $_GET
								));
								?>
							</div>
						</div><!--end fill-->
						<div class="bottom"></div>
					</div><!--end box-->

				</div><!--end leftcolumn-->
				<?php get_sidebar(); ?>


				<div class="clear"></div>
			</div><!--end container-->

			<div id="push"></div>
			<?php get_footer(); ?>
			<?php
				function get_users_with_posts($order_by, $direction, $limit, $page)
				{
					global $wpdb;

					$order_by 	= $wpdb->escape($order_by);
					$limit 		= $wpdb->escape($limit);
					$offset 	= ($page - 1) * $limit;
					$direction 	= (in_array($direction, array('ASC', 'DESC'))) ? $direction : 'DESC';

					$sql_limit = '';
					if ($limit > 0)
					{
						$sql_limit = "
						LIMIT ".$limit."
						OFFSET ".$offset
						;
					}

					$bloggers = $wpdb->get_results("
						SELECT ID, user_registered, display_name, post_count
						FROM
						(
							SELECT post_author, COUNT(*) AS post_count
							FROM wp_posts
							WHERE post_status='publish'
							GROUP BY post_author
						) AS stats
						LEFT JOIN wp_users
						ON stats.post_author = wp_users.ID
						WHERE post_count > 0
						AND post_author NOT IN (1, 30, 48)
						ORDER BY ".$order_by." ".$direction." ".
						$sql_limit
					);

					return $bloggers;
				}
			?>