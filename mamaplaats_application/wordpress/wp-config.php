<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define('LOCATION', '');

// Load the Kohana DB config
define('SYSPATH', '');
$db_config = include dirname(__FILE__) . '/../application/config/database.php';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $db_config['default']['connection']['database']);

/** MySQL database username */
define('DB_USER', $db_config['default']['connection']['username']);

/** MySQL database password */
define('DB_PASSWORD', $db_config['default']['connection']['password']);

/** MySQL hostname */
define('DB_HOST', $db_config['default']['connection']['hostname']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', $db_config['default']['charset']);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

unset($db_config);

// Mamaplaats configs
define('URL_WIN', '/winacties/');
define('URL_SHOP', '/shops/');
define('URL_TEST', '/testpanel/');
define('URL_ADVICE', '/informatieve-artikelen-zwanger/');
define('BP_MAIN_EMAIL', 'info@mamaplaats.nl');
define('BP_MAIN_NAME', 'Mamaplaats');
define('WP_CACHE', true);
$mamaplaats_home = array(
	'zwanger' => array(
		'blogs' => 'zwanger',
		'promotions' => 'acties-zwanger',
		'fun' => 'fun-zwanger',
		'products' => 'nieuwste-producten-zwanger',
	),
	'babys' => array(
		'blogs' => 'babys',
		'promotions' => 'acties-babys',
		'fun' => 'fun-babys',
		'products' => 'nieuwste-producten-babys',
	),
	'kind' => array(
		'blogs' => 'kind',
		'promotions' => 'acties-kind',
		'fun' => 'fun-kind',
		'products' => 'nieuwste-producten-kind',
	),
	'mama' => array(
		'blogs' => 'mama',
		'promotions' => 'acties-mama',
		'fun' => 'fun-mama',
		'products' => 'nieuwste-producten-mama',
	),
);

/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '3F] +Lit `l^d@1Zb]oZH[++~[5!-^pdjx9`!nGf-8T)If4,3NN<qkD&WU+`63&3');
define('SECURE_AUTH_KEY', 'AZe%[y|l?e_D+y((8#DJ,Hf:`sW.sISA-pDrH<?;qU]!r#/p+I#Cs8E~_.Fb+xG<');
define('LOGGED_IN_KEY', 'N!w`Z[O#yslOV&|Z$5tIelfzMSW``B`w@@)O:&-GrinxD|4v:8U|.2INA[r26K}%');
define('NONCE_KEY', 'A1_+j-H- O>.]O2r^c~65*uS4D_GI/#1`wV{vFas<&o:a0Puq>!/:kg{0JS_8Lax');
define('AUTH_SALT', '3te&c8+Q2K|8qH%E-OmN[ZOZl$<C?$6h&i=m/> >BF^k[|YXL|WWGPG0hYBe=H{w');
define('SECURE_AUTH_SALT', 'pwZ21lp<Rg8l4gd{PNjc<K39@5hqyZFn>DO#L:7BlXBXVO&or~?5g9(+--~4f|qe');
define('LOGGED_IN_SALT', '0`s1q1K-j8aQ[1&@/]6bPtKUrmx+K[LSvtj/h9s{nx}5#iy&y7b+$_]ckI5h8}$t');
define('NONCE_SALT', 'Kk855Qf8IIu^SjIY9dXu{LP.?16gwz%e]z2-a~Q1^){Ww9Y-K;j[e&,ic!PKzIqL');

/* * #@- */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_POST_REVISIONS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
