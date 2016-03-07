<?php get_header(); ?>
<div id="container">
	<div id="leftcolumn">
		<div class="box-slider">
			<!--<a href="#" class="previous">Previous</a>
			<a href="#" class="next">Next</a>-->
			<div class="fill padding-top">
				<div id="slider" class="nivoSlider">
					<?php $slider_posts = get_posts(array('category_name' => 'homepage-slider')); ?>
					<?php foreach($slider_posts as $post) : setup_postdata($post); ?>
					<a href="<?php echo get_post_meta($post->ID, 'url', true) ?>"><?php the_post_thumbnail('slider-image', array('title' => '')); ?></a>
					<?php endforeach ?>
				</div>
			</div>
			<div class="bottom"></div>
		</div><!--end box-->


		<div class="box homepage">
			<div class="anchors">
				<a href="<?php bloginfo('url') ?>/zwanger/" class="goto-zwanger">Zwanger</a>
				<a href="<?php bloginfo('url') ?>/babys/" class="goto-baby">Baby</a>
				<a href="<?php bloginfo('url') ?>/kind/" class="goto-kind">Kind</a>
				<a href="<?php bloginfo('url') ?>/mama/" class="goto-mama">Mama</a>
			</div>
			<div class="fill">

				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<h1 class="intro"><?php echo improved_excerpt(200) ?></h1>
				<?php endwhile; ?>
				<?php endif; ?>
				<div class="divider"></div>

				<div class="gadgets">
				    <?php
					if(function_exists('dynamic_sidebar')){
					    dynamic_sidebar('Homepage Gadgets');
					}
				    ?>
				</div>

				<div class="divider"></div>

				<div class="blogs">
				    <?php
					if(function_exists('dynamic_sidebar')){
					    dynamic_sidebar('Homepage Blog blok1');
					}
				    ?>
				</div>

				<div class="divider"></div>

				<div class="blogsters">
				    <h2 class="uitgelicht">Laatst Geblogd</h2>
				    <div style="border: 1px  #dfdfdf solid; margin: 8px;" class="round">
				    <?php
					if(function_exists('dynamic_sidebar')){
					    dynamic_sidebar('Homepage Blogers');
					}
				    ?>
					<h3 style="float: right; margin-right: 8px;" class="theme-head"><a href="/blogsters/">klik hier voor meer blogsters &raquo;</a></h3>
				    </div>
				</div>

				<div class="divider"></div>

				<div class="blogs">
				    <?php
					if(function_exists('dynamic_sidebar')){
					    dynamic_sidebar('Homepage Blog blok2');
					}
				    ?>
				</div>

				<div class="divider"></div>

				<h2 class="uitgelicht">Bekijk alle <a href="<?php echo get_year_link(date('Y')) ?>">Eerdere Blogs</a></h2>

			</div><!--end fill-->


			<div class="bottom"></div>
		</div><!--end box-->


	</div><!--end leftcolumn-->
	<?php get_sidebar(); ?>


	<div class="clear"></div>
</div><!--end container-->

<div id="push"></div>
<?php get_footer(); ?>