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
define('DB_NAME', 'trialdb');

/** MySQL database username */
define('DB_USER', 'trialuser');

/** MySQL database password */
define('DB_PASSWORD', 'trialuser');

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
define('AUTH_KEY',         '9)}g9`/<w|,?/o gz8jg{n7tFfSs5Mc454v }u @ak#yM.~tr>GGi?6W;W.gmz-8');
define('SECURE_AUTH_KEY',  'jwa^nn&X](L(s>08B6-Pjr?)&V2-H+!.+7Y8$#k^tBC*aaZHrCO}rW77:Cku=b@|');
define('LOGGED_IN_KEY',    '2&V:8:TvpT@3/6]7|]~w4c@5Sbl%M%(O++7r6(ff/ySSjd-%?R|n`A[bR~.qd$b|');
define('NONCE_KEY',        'lB:`t6T +pc-YEAAGf:R!?~[-7O$cXO-{7=rDa Vwc9WkQpNo*1*8WcRc4v. zIT');
define('AUTH_SALT',        'J- @=7 mc|esk|c7u4R^T!TH5N9i*i9Zib-C:eo%)WOX,5,-8H,-L>|!|&2347$3');
define('SECURE_AUTH_SALT', 'i&s|2#|KOSXW~muZ0:!UJD=^=rg_w,0c/k.%x+5EP?{/gI++j(nj9M32!SUh/|Hs');
define('LOGGED_IN_SALT',   'Q^2;|g/QA/`ZlJHK:@Gr{%pPYl?F:r&pb+]XT^UWgi>dw]-s`8L#(S+YUx>**6[I');
define('NONCE_SALT',       'Fr!8jyWJG8IezghSW,!nI 4)S3aIrvvAeaX0SmkAt{]srtTby^UP@9w[qY.K|%q=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'trialpx_';

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
