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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2>@OAQ5 (tRVenUJzda;MjlyXPZWI(^iA>Dx{|u/-SZCOMDY2R_p9Jw0:o4,}C|r');
define('SECURE_AUTH_KEY',  'HtrB)TtDr-$MobaKc~ESz`v?Xp.qaNre1]g*8OB}Qfh?nKe]k|[[6_%DW!hpd]3P');
define('LOGGED_IN_KEY',    'DaQRe-0V_N:ujH.koE0klqStR /!,_]qJO[HG|Tt:ar(|k+cwQ{=I;IeQX@!n&(7');
define('NONCE_KEY',        '>? _:%NmFuPHEto,8#[hwn).2EUp4CjGz7<XCk/zAto-swz7t%vxbusHl/Ovx$7,');
define('AUTH_SALT',        'A &hNX?dYU)Vbo8I>0Ofk+B-,auPVx}8%`.+<g|i~.Xw]gNN?&b+T@@r45oqMHn}');
define('SECURE_AUTH_SALT', '8iGCQa%-=&c3en;ol-[+YB|f4re^eFj4x#_gVN=uB1XjG S:zsp$GOGZ#-iJS<pX');
define('LOGGED_IN_SALT',   'wd%}uy<l~W_OM0Nxe3i7$tOq=b^DLLW587J5{:}/-DF,+GlH>~W9tPX}/B0-TRD+');
define('NONCE_SALT',       'W Q{|CIQ2|,!+Wo{-N<:7jA+~]e<g?_Y&o-9Mg!d,NivjR&u4=^X7@7=HAd2+?3v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
