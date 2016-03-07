<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to mamaplaats_comment() which is
 * located in the functions.php file.
 *
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>
	<h2 id="commentlist" class="themehead icon-comments">Reacties</h2>
	<?php if ( have_comments() ) : ?>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'mamaplaats_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'reactie navigatie', 'mamaplaats' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; vorige reacties', 'mamaplaats' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'volgende reacties &rarr;', 'mamaplaats' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments" style="float: left;">Reacties zijn gesloten.</p>
		<?php endif; ?>

	<?php else: ?>
		<ol class="commentlist">
			<p class="nocomments">Niemand heeft op deze pagina gereageerd.</p>
		</ol>
	<?php endif; // have_comments() ?>
		<h2 class="themehead icon-comments">Reageer ook!</h2>
	<?php if(get_post_meta($post->ID, 'only_registered', true) == 1 && !$user_ID): ?>
		<p class="nocomments" style='float:left;'>
			U moet ingelogd zijn om op deze pagina te mogen reageren <a href="<?php bloginfo('url') ?>/gebruiker/aanmelden/">Log in</a> of <a href="<?php bloginfo('url') ?>/gebruiker/registreer/">Registreer</a>
		</p>
		<div class='clearer'></div>
	<?php else: ?>
		<div id="form-origin" class="padding">
		<?php comment_form(); ?>
		</div>
	<?php endif; ?>

</div><!-- #comments .comments-area -->