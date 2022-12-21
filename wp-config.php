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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'Potz%JY={Uovd_A|B=[ @=%&<L9VPi<2%,Pm]62DA}C&C>mg8xmrM0_H(_;&Z?C_' );
define( 'SECURE_AUTH_KEY',  '2?iYB!76#+MFs~n6Pgm;ks<ggKhB)dJ6&XQ,y-cgOMYf -BJOwhSM=n??dK:DcYI' );
define( 'LOGGED_IN_KEY',    '59DEZJq{$;LLMmwvKX.i+q1mDQa>1y&or}IL~DuQ4.c>F!.tj=$nJjv@CD;@9l/?' );
define( 'NONCE_KEY',        'YQ~i^@d&%{i0TSNA<MdG j-[!~!_u#.H,At43?FWV1YPnG(2=|F:)rrGn`l=(Zr,' );
define( 'AUTH_SALT',        '?Yr[CyhtvKUr^u!a2xo2(aflI@k<&[9Im#n*i<pC8XpPp%E.[4d0_FMcCh(4C2c6' );
define( 'SECURE_AUTH_SALT', '[_[kwTrs#opy5c?n]a]mp/xi;}{,+up@xy|ds9pE6EzyPB^&9o7;]J:!N4hCgvl8' );
define( 'LOGGED_IN_SALT',   'VJ{9g^`]*EsNF7J]yDoy]nsh;R]r<s+l`hH?tS^.@SV.+<|oXF5@NNCM>&3jL],6' );
define( 'NONCE_SALT',       'J<fcV.P6}K}-%5P O%?D(}iH4X|aU|Ys_grQK4<yw+*8FbY<K{/@e]>k={}l[qFt' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
