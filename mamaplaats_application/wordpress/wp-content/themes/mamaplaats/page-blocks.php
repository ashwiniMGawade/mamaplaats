<?php
/*
Template Name: Blanco
*/

if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == "/gebruiker/aanmelden/")
{
	$url = explode('/', $_SERVER["REQUEST_URI"]);
	$chequeid = $url['3'];
	wp_dequeue_style('mamaplaats_style');
	wp_enqueue_style('gebruikers_form', get_stylesheet_directory_uri() . '/voordeelclub/css/voordeelclub.css');
	get_header('voordeelclub');
	echo a4y_user_login();
	get_template_part('footer', 'new');
}
else
{
	$random_number = rand(1, 999999);
	get_header();
?>
	<div id="container">
		<div id="leftcolumn">
			<div class="box">
				<div class="fill">
					<?php
					if (function_exists('yoast_breadcrumb'))
					{
						yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
					}
					?>
					<div class="divider"></div>
					<div class="themecontent">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="entry">
							<?php the_content();?>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
					<div class="divider"></div>
					<h2 id="commentlist" class="themehead icon-blogs">Deel deze blog met vrienden!</h2>
					<div class="addthis_toolbox addthis_default_style">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_hyves_respect"></a>
						<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
						<a class="addthis_button_email"></a>
					</div>
					<div class="divider"></div>
					<?php comments_template();?>
				</div>
				<div class="bottom"></div>
			</div>
		</div>
		<?php get_sidebar();?>
		<div class="clear"></div>
	</div>
	<div id="push"></div>
	<?php get_footer();?>
<?php } ?>