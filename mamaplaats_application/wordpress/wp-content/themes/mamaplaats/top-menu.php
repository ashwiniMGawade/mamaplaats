
		<div id="wrapper">
			<!-- Mamaplaats_Billboard -->
			<div id='div-gpt-ad-1382016617424-2' style="text-align: center;">
				<script type='text/javascript'>
					googletag.display('div-gpt-ad-1382016617424-2');
				</script>
			</div>
			<div id="header" class="pink">
				<div id="headerwrapper">
				    <a id="logo" href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-mamaplaats.png" width="102" height="119" alt="Mamaplaats" /></a>
					<div id="slogan">De blogsite voor en door moeders</div>
					<div id="voordeelholder" class="fr">
						<?php global $user_ID, $user_identity, $user_level, $wpmem_regchk ?>
						<?php if ( $user_ID ) : ?>
						<div class="fr pt3px whttxt13px mrb3px">
							<a href="<?php echo home_url( 'blogsters/' ); ?>">Blogsters</a> |
							<a href="<?php bloginfo('url') ?>/gebruiker/">Mijn Profiel</a> |
							<a href="<?php echo wp_logout_url( get_permalink() ); ?>&redirect_to=/">Log uit</a>
						</div>
						<?php else : ?>
						<div class="fr pt3px whttxt13px mrb3px">
							<a href="<?php echo home_url( '/blogsters' ); ?>">Blogsters</a> |
							<a href="<?php echo URL_LOGIN; ?>">Inloggen</a> |
							<a href="<?php echo URL_REGISTER_VDC ?>">Gratis registreren!</a>
						</div>
						<?php endif  ?>
						<div id="searchholder" class="clr">
							<form action="<?php echo home_url( '/' ); ?>" method="get">
							<input type="text" name="s" placeholder="Zoeken..." />
							<input class="go-search" type="submit" />
							</form>
						</div>
					</div>
					<?php wp_nav_menu(array('theme_location'  => 'main_menu', 'menu_class' => 'mainnav', 'container' => false, 'depth' => 3, 'walker' => new description_walker())); ?>
					<?php //echo load_second_level_menu('main_menu', 'subnav') ?>
					<div id="advice_button">
						<a id="advice" href="<?php echo URL_ADVICE; ?>">Advies</a>
						<ul class="advice_menu">
							<li><a href="/informatieve-artikelen-zwanger/">Advies Zwanger</a></li>
							<li><a href="/informatieve-artikelen-baby/">Advies Baby</a></li>
							<li><a href="/informatieve-artikelen-kind/">Advies Kind</a></li>
							<li><a href="/informatieve-artikelen-mama/">Advies Mama</a></li>
							<li><a href="/advies/voeding/">Advies Kindervoeding</a></li>
							<li><a href="/advies/geboortezorg/">Advies Geboortezorg</a></li>
						</ul>
					</div>
					<a id="photocontest" href="/fotowedstrijd/">Fotowedstrijd</a>
					<a id="win" href="<?php echo URL_WIN; ?>">Win</a>
					<a id="test-button" href="<?php echo URL_TEST; ?>">Test</a>
					<a id="vdc-button" href="<?php echo URL_VOORDEEL; ?>">Voordeelclub</a>
				</div>
			</div>
			<div id="adcontainer">
				<!-- Mamaplaats_728x90 -->
				<div id='div-gpt-ad-1382016617424-1'>
					<script type='text/javascript'>
						googletag.display('div-gpt-ad-1382016617424-1');
					</script>
				</div>
			</div>