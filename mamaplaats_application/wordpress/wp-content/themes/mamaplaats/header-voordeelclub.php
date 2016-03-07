<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(''); ?></title>

		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="Content-Language" content="nl-NL" />
		<meta http-equiv="imagetoolbar" content="no" />

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/logo-iphone.png" sizes="72x72"/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri() ?>/images/mamaplaats-startup.gif" />
		<meta name="application-name" content="Mamaplaats" />

		<meta name="google-site-verification" content="gRSSrnhSZ29fXY7xSg9LSJXwH_sVDnxXzEdXstXqZv0" />

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<meta property="fb:admins" content="info@affiliate4you.nl" />
		<meta property="fb:app_id" content="198459770232050" />

		<?php wp_head(); ?>
	</head>
	<body>
<?php echo LOCATION; ?>

	<div id="wrapper">
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
				<a id="advice" href="<?php echo URL_ADVICE; ?>">
					Advies
					<ul class="advice_menu">
						<li>
							<a href="/informatieve-artikelen-zwanger/">Generiek</a>
						</li>
						<li>
							<a href="/advies/voeding/">Voeding</a>
						</li>
						<li>
							<a href="/advies/geboortezorg/">Geboortezorg</a>
						</li>
					</ul>
				</a>
				<a id="photocontest" href="/fotowedstrijd/">Fotowedstrijd</a>
				<a id="win" href="<?php echo URL_WIN; ?>">Win</a>
				<a id="test-button" href="<?php echo URL_TEST; ?>">Test</a>
				<a id="vdc-button" href="<?php echo URL_VOORDEEL; ?>">Voordeelclub</a>
			</div>
		</div>
<div class="main">