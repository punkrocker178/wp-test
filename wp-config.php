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

define('WP_MEMORY_LIMIT', '256M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?.>|;jqI+ Iy5;iu-ghk*v(v*$T+_yNp+,{DW(%~->}N@=`UPIS4!Z}&|@;[l Z ');
define('SECURE_AUTH_KEY',  'jG)?Am`6k`-.3+1fV6$AC!-1%2z~#KCL5c28fymz+=W,jg9*p}Z[|w~|cAUj6a%?');
define('LOGGED_IN_KEY',    '9+8{ApC2uTv&s:VgI}fnW4DI5>520=/w,-1N#_?zU%8#B`Bk|nc12[FTe^u&s);7');
define('NONCE_KEY',        '5{HM:w}nL:}0lJ}V[L& pxZYI^p{Z)>lippgNoQ*fp d+-vn!;jtz0u?z?-<CSQ(');
define('AUTH_SALT',        '}/hGFye|%d)yT$aDuOt4?n^cg<v|<2`#E9Cy_`J@K/=L;]LW+|-FT<]sOAZXp7 z');
define('SECURE_AUTH_SALT', 'yLoP3|SX-*;z^w*Ay)]%dv[ue<l/[ctYzKbWF#1XS#xzG;IBZ;$u(l>2a)o{`dL5');
define('LOGGED_IN_SALT',   '$|[sU,#Xoz;Wmu,R;3Bs!fUaxSbJ 3A<Q00sG$8e)p!-yS7?AI^HD>ps1[q1QIC#');
define('NONCE_SALT',       '-*X)Gc^H|@MIl]n}UvDc!-PfIZ )6)$c:<DpZ!N`V~ K`-gLxsJe+x>Z_ZV%)r$M');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

define( 'JETPACK_DEV_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

