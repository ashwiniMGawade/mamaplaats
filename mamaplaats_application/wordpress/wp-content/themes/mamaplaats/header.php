<?php global $query_string; parse_str($query_string, $query_args); ?>
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

		<?php $active = get_active($query_args); ?>
		<?php if(!empty($active)): ?><link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri() . '/css/' . $active ?>.css" /><?php endif ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<meta property="fb:admins" content="info@affiliate4you.nl" />
		<meta property="fb:app_id" content="198459770232050" />

		<?php wp_head(); ?>

		<!-- Adfab -->
		<script type='text/javascript'>
			(function() {
				var useSSL = 'https:' == document.location.protocol;
				var src = (useSSL ? 'https:' : 'http:') +
					'//www.googletagservices.com/tag/js/gpt.js';
				document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
			})();
		</script>
		<script type='text/javascript'>
			googletag.defineSlot('/3132730/Mamaplaats_336x280', [336, 280], 'div-gpt-ad-1382016617424-0').addService(googletag.pubads());
			googletag.defineSlot('/3132730/Mamaplaats_728x90', [728, 90], 'div-gpt-ad-1382016617424-1').addService(googletag.pubads());
			googletag.defineSlot('/3132730/Mamaplaats_Billboard', [970, 250], 'div-gpt-ad-1382016617424-2').addService(googletag.pubads());
			googletag.defineSlot('/3132730/Mamaplaats_Floorad', [1, 1], 'div-gpt-ad-1382016617424-3').addService(googletag.pubads());
			googletag.pubads().enableSyncRendering();
			googletag.pubads().enableSingleRequest();
			googletag.enableServices();
		</script>
		<!-- End Adfab -->
	</head>
	<body>
	<!-- Adfactor -->
	<script src="http://www.googletagservices.com/tag/js/gpt.js">
		googletag.pubads().definePassback('/4045/dqa.adfactor.nl/mamaplaats', [3, 3])
			.setTargeting("campaign", "nintendo_supermario")
			.display();
	</script>
	<!-- End Adfactor -->
<?php echo LOCATION; ?>
<?php get_template_part( 'top', 'menu' ); ?>