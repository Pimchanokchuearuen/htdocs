<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'F7)3^:B2OifX1r~ul8ih|X<z??3i-Rv+zth^bigau_Eb*<pi;qBzKEnhN$?/QfaF' );
define( 'SECURE_AUTH_KEY',  '8_sjfSLH|.0+jRb1p6@1F%%I(-0&|LRrtQY,c%* <pSqd1-$1%ON;wxn>:visT T' );
define( 'LOGGED_IN_KEY',    'v08!b@QauILu(!I*:B:1k`@WQ!rL-+EAfu!PQ^Ddryj$LQaz._UMX^M.R[`l;t(l' );
define( 'NONCE_KEY',        's-(L,fEAN?pE>QY^us&&_ol<xxENZ4WU%)KVnOQJ<+Qvr$V?0n`m-E.a3Y?L1-}G' );
define( 'AUTH_SALT',        '.?VE%bJms8|*S=)T7$hesE0P{+BN%Us& 6LV%O~h0n],t.T5QeEYavu]+aR_^Bmx' );
define( 'SECURE_AUTH_SALT', 's!Db,Xon(njj36<3lL`f,r}DP=%#{M3#m2#Gr/p{b/fV*y=Rf>@Y!{s{l,WLd1(g' );
define( 'LOGGED_IN_SALT',   'nkGT|v{Y&qXK4;;VD3Q&p;{[w( q@pDyNj?m#E662vQ6mz[}rmL5OYeJVW-#U^Xx' );
define( 'NONCE_SALT',       '9p#i6F!VF#NgXb|n}+M+QB0iybct/I0(-yYXuH<3}TQD(XFGGj&_~57uAg7TuUc<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
