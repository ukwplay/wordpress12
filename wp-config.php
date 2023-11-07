<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database7036' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Sai12345' );

/** Database hostname */
define( 'DB_HOST', 'database70.cfdttnyxtbk7.us-east-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't9fifQwgYZEbMzUjLlUjEV^Lh|WD*Q,1xo/W6xo*cf5P&+0%37t:PlH&c:CvnL-`' );
define( 'SECURE_AUTH_KEY',  'Rgd6n 6saRlcIbCI`-0M,GL %t8O)e%G=*QCi[Z,SD?]Y7@miO:S?vib%|J.!uqF' );
define( 'LOGGED_IN_KEY',    'j@G0N`yDWu[/RY!YnD,>F?6wIzW:?3Z6>DQ&L{KM|F<MU2E(bF;K2<x`+m@_[1#{' );
define( 'NONCE_KEY',        ':*/r8|^STxAsrBOq:}L)U82= ?,ftiQu9p!q>O3_I|DPY0:0qSxI6?&fr5!|MsBm' );
define( 'AUTH_SALT',        'fuhatRk},B>-* x#bzunOm}>x/g|%X~Q*V1@wT-ArVXJ$7-Fhj@+?;:]23+>tn7Q' );
define( 'SECURE_AUTH_SALT', 't#Y%ouo}g5?ug9&;?YUQ=:<VI=;6>{3``Z,ZMr$qP KKm33vU-|`+KAL0[] !d;-' );
define( 'LOGGED_IN_SALT',   '|E^Y+x8e:tDp8JvIZg,ZHs&si?;(<?X0[kMJtE#3[+<-hD#z2dz@+ZF<[#<7!tVC' );
define( 'NONCE_SALT',       '=p:/q9;M=3/$.*jQm9I1HI)[]y >fm+S&4aA5?7E*0MBXi8R?s1Y&-O@>_+6!9ds' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
