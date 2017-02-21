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
define('DB_NAME', 'shaylee_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'op>Ok1{e4yK{6Tl.</-kGO:~Nx3wXoz5k(b|Hk7l*3I[wPeKZ8LZFf#>3n/_Nos@');
define('SECURE_AUTH_KEY',  '=J&e]WB#N(b0?DqlRgj!2PRc>O(f7Bum@1ZJW1]+#/t{uX]%ciPJK]6d@&,[A!oU');
define('LOGGED_IN_KEY',    'b&pb#X|B;xCG>Fd$QCpRJ~+f3QH4O .HdA3K2|bc{o>&8_A#!~ QoN#sLb~aIK}F');
define('NONCE_KEY',        '*WiEMkYY/1i8}zy`E:_#G&{s~ gc&aP,)et=IzB04{vW6zvz9;^GI#l$m/Qp_+F*');
define('AUTH_SALT',        'j8-}d(8]he=kTlXvr5a?.+HXB4N]$K@lCfSf&i3r~QN^)[p73C<TNOC&X2~!NZ#Z');
define('SECURE_AUTH_SALT', '3OQ,?}/?9pNivNyQS7ke(wK[+T`p18@aD]R6ST7/aG[Gare.JDbT@UFkZr2y2LAK');
define('LOGGED_IN_SALT',   'R8;lB9:O=hY<Yc?Li:cZpPMilT!8J*nx(_,M~%Ja?Y.P|6f3o2=@Wm0|zsq<;Jtt');
define('NONCE_SALT',       ';9CR|l%3U)9AFu71>a{TTj2]7oR{hCcIr}ZtH_ho;rA[D.8<jBbz%@%$lc!80W6 ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
