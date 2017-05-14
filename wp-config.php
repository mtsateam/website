<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'halfshekel');

/** MySQL database username */
define('DB_USER', 'halfshekel');

/** MySQL database password */
define('DB_PASSWORD', 'sadsadXSDSReer!@#!@$%!@$');

/** MySQL hostname */
define('DB_HOST', '208.97.163.22');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@oBX:SE`mI_X|bGjD-^n9`h6wuF5*FkS!I-WAso]PTW,==dpcx:s4vi&O(|vGs_3');
define('SECURE_AUTH_KEY',  '800_+sz/Jfwm~`:f1pg~Tek5m$.o/|F6u)o1EA&t{*C{0H3U_wW,vWbAa!!-Eu5:');
define('LOGGED_IN_KEY',    '0iu4k^$X(;]:g:s,[|z%qRs<X^^{3>eg[ywb!vxCI`M>p_7WzE6C+t>;?}&#3}-r');
define('NONCE_KEY',        '|G`fza*(o;|Z<JcBI{C01IK?=?0L6VyW&Z#v.Cj^IVd[o4c>T,#P_d2F#*0[z+%f');
define('AUTH_SALT',        ')w?$ MkTgh3sUa0&~%$.E1I=~t#G,~hWlR)&G$BS<BnFdUyjr(oQl^tt4MvbD/+*');
define('SECURE_AUTH_SALT', 'C7lK8RyWdP(O<!0Cg}8cOIY~LK%~{1mY5Ws`1edj]NAKcg<Q2^J5@O}F[8bJf!p+');
define('LOGGED_IN_SALT',   ' +uQXez8MXB,N>-wD&~M@hKk]9e^ ZpJ?+x9&bh)h<l:1l3C2-`9rYr+`07BJ#4C');
define('NONCE_SALT',       '>/k6_D[E>okLth?sK?uPiW)|yS`t^NHmbK^Vp)GLA[S)Z@-YQGtdV`9,8iHda2]m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mtsa_tw';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
