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
define('DB_NAME', 'IEEE');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pr0cess');

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
define('AUTH_KEY',         '|qgtivRo<7cG?EQhV<X;Hl|[^G+o=o<MPSnW;< LvTDVZHAHT5yvWjk]x-+WerIW');
define('SECURE_AUTH_KEY',  '-~-iXCjO6V[p`Zg,]/#vw|&AOZl3AUbj-hI&T6CE-R XOA^{]fa1y6X&k>$F0#}-');
define('LOGGED_IN_KEY',    'v7@OeCOh+ai+_p||S8Y7:!$#Zs-uV2+zjOtQKnxSBH V2*#UoN@Ev+z9(^tO[BK:');
define('NONCE_KEY',        'E)DQbri-_M<CD]V?^M}&*FDc@C~J.HM2||kTi|Wt-hx`dz]=BgxUn  26bnUl;E7');
define('AUTH_SALT',        'v*~q~SmcSGyb3-j;+-EE<,)zmMS,PdLRwr;ycH%K(!hyaBivex_Ip(`@l12RaEU ');
define('SECURE_AUTH_SALT', 'a{zrPp19^t}8D:^hduv3ikO6ZRmRrO(sW;zs})&7c3+O+}6LU|njbp3W8S?FOvXs');
define('LOGGED_IN_SALT',   '[A1>ebhap/?^1:*0bJ*r]1,pIo|#xI {Qa#~=<$[Eq!V|GyWM@+ZmtyuU#mfs+DM');
define('NONCE_SALT',       'q-#&|J?Sg(sI*X|:3ePO-|Kp(~2MUpb P>~L0@^Pr.]QdCyQ?|[)v|X3|EYfPd,X');

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
