<?php
	if(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == "/gebruiker/aanmelden/")
	{
        $url = explode('/', $_SERVER["REQUEST_URI"]);
        $chequeid = $url['3'];
		wp_dequeue_style('mamaplaats_style');
		wp_enqueue_style('gebruikers_form', get_stylesheet_directory_uri() . '/voordeelclub/css/voordeelclub.css');
		get_header('voordeelclub');
		echo a4y_user_login();
		get_template_part( 'footer', 'new' );
	}
	else
	{
		get_header(); ?>
			<div id="container">

				<div id="leftcolumn">

					<div class="box">
						<div class="fill">

							<?php if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p class="breadcrumbs">','</p>');
							} ?>

							<div class="divider"></div>

							<div class="themecontent">
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
								<div class="entry">
									<?php if(has_post_thumbnail()): ?><?php the_post_thumbnail(array(160,160)); ?><?php endif ?>
									<?php do_action('top3'); ?>
									<h1 class="post-head"><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</div><!--end entry-->
								<?php endwhile; ?>
								<?php endif; ?>

							</div><!--end themecontent-->

							<div class="divider"></div>
							<h2 id="commentlist" class="themehead icon-blogs">Deel deze blog met vrienden!</h2>
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style">
								<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
								<a class="addthis_button_tweet"></a>
								<a class="addthis_button_hyves_respect"></a>
								<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
								<a class="addthis_button_email"></a>
							</div>
							<!-- AddThis Button END -->

							<div class="divider"></div>

							<!-- comments -->
							<?php comments_template(); ?>


						</div><!--end fill-->
						<div class="bottom"></div>
					</div><!--end box-->
				</div><!--end leftcolumn-->
				<?php get_sidebar(); ?>


				<div class="clear"></div>
			</div><!--end container-->

			<div id="push"></div>
			<?php get_footer(); ?>
<?php } ?>