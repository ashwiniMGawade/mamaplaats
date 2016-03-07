
		<div id="wrapper">
			<div id="header" class="pink">
				<div id="headerwrapper">
					<a id="logo" href="<?php echo get_bloginfo('url') ?>">Mamaplaats</a>
					<div id="searchholder">
						<form id="searchform" action="<?php echo home_url( '/' ); ?>" method="get">
							<input size="20" name="s" id="s" value="Ik zoek naar"  class="inputfield" onfocus="if (this.value == 'Ik zoek naar') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Ik zoek naar';}" />
							<input type="submit" value="" id="searchsubmit" class="go-search pointer-cursor" />
						</form>
					</div>
					<?php wp_nav_menu(array('theme_location'  => 'main_menu', 'menu_class' => 'mainnav', 'container' => false, 'depth' => 1)); ?>
					<?php echo load_second_level_menu('main_menu', 'subnav') ?>
					<a id="win" href="<?php echo URL_WIN; ?>">Win</a>
					<a id="shop" href="<?php echo URL_SHOP; ?>">Shop</a>
				</div>
			</div>