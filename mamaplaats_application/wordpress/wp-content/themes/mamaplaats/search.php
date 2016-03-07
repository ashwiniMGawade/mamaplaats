<?php get_header(); ?>
<div id="container">
	<div id="leftcolumn">

		<div class="box">
			<div class="fill">
				<?php if ( have_posts() ) : ?>
				<h2 class="themehead icon-blogs"><?php printf( __('Zoek resultaten voor \'%s\''), esc_attr( get_search_query() ) ); ?></h2>

				<div class="themecontent winactie">
					<?php while (have_posts()) : the_post(); ?>
					<div class="widgetthemebox-winacties">
						<div class="entry">
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(array(80,80)); ?>
							<?php else: ?>
							<img src="<?php echo get_first_image() ?>" width="80" height="80" alt="Entry image"/>
							<?php endif ?>
							<a href="<?php the_permalink() ?>#commentlist" class="comment-bubble"><?php echo get_comments_number() ?></a>
							<div class="label-author">
								<h3 class="theme-head-winacties"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<p class="author">Geschreven door <?php echo the_author_posts_link() ?> op <?php the_time('j F Y') ?></p>
								<p class="excerpt"><?php echo improved_excerpt(); ?></p>
							</div>
						</div>
					</div>
					<!--end entry-->
					<?php endwhile; ?>
				</div>
				<!--end themecontent-->
                                
                                    <?php get_header($postnum = 1); ?>

				<div class="divider"></div>
                                    <div class="entries-nav">  
                                       <span class="previous-entries"><?php previous_posts_link('Vorige') ?></span>  <span class="next-entries"><?php next_posts_link('Volgende') ?></span>
                                    </div>
				<?php else : ?>
                                    <h2 class="themehead icon-blogs"><?php printf( __('Zoek resultaten voor \'%s\''), esc_attr( get_search_query() ) ); ?></h2>
                                    <div class="themecontent">
                                            <p>We hebben geen zoekresultaten voor uw zoek criteria kunnen vinden. Probeer het opnieuw met een ander zoekwoord</p><br />
                                            <?php get_search_form(); ?>
                                    </div>
                                
				<?php endif; ?>
        
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