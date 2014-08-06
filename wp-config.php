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
define('DB_NAME', 'intimations');

/** MySQL database username */
define('DB_USER', 'ioi_daemon');

/** MySQL database password */
define('DB_PASSWORD', 'seraphimregress');

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
define('AUTH_KEY',         'Qh|;c5>o(o-:;S|m6H@kmWSE&4_~~Yj?|i^;f)J1z6FGpUPk4OzV)o+]_ +2#Ih3');
define('SECURE_AUTH_KEY',  'OzM. =kCP5B(PZ&^T7D_/%-2i*W#yMD#JT5BtY49(#X-X8_;V|~-`f;9Xn>B>]+H');
define('LOGGED_IN_KEY',    'HPYY@;9gZlbm~#0-=NH8`GxS1ZKBo>$wPczI4%<;M-<41fr.R|uGg?dg `H3[JZ?');
define('NONCE_KEY',        's>U&n}U=t5fLRv/@S %JVwvZ)|@F]r}a/o.^Tpk[C$>ZXe)[Wn46w}=m}xy>U(^W');
define('AUTH_SALT',        'Y-%o$x.dSm$ikxlE#?#0`Uv;IAk$_[k?h+IMS35[f{Z<{{qv~|L@pb~X|1GN$m5{');
define('SECURE_AUTH_SALT', 'ycJmH5+|iH18D+!U*[&EIW~5axY%YG*t--JF,%Hyd#FFi3|f^VI{eI|&Ld3v8KMa');
define('LOGGED_IN_SALT',   ')27|uIO,=W+582~dOaP2hC2q<H-uD-+cj5(UAY+R<JfgfGDVZDsuA IEA|WPNqFN');
define('NONCE_SALT',       '~O^`{.#w|f7A6oRo{&)%{>QZVKv*a4?^*-H4~E|O:0QA6Fy,FMWo=9WXp{>` -r9');

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
