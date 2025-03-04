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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'SwbwJ]^scBm0f]>gx]. jM@qk:r2XKWP{;S6i(k*;MAys$`ghu`L{~HWF? lHrF6' );
define( 'SECURE_AUTH_KEY',  'FJA(N)@b,.37cWs^Z,3f =`0>In%cG(=btqxAjPlF[*^=cF4]8d-tHZbh+V.5q[v' );
define( 'LOGGED_IN_KEY',    '}IxqqSkf 3.GV79#Jy+T[=4N@BX}q9rU;A@:OZ6be>eE62j.C*izDIF49+q?,@YF' );
define( 'NONCE_KEY',        'i,Cn8:a2-#gw}m4@9wFv9;<XUFU>C=V~I]pX^v%E%EgjZu`IgLFhU}*ULBlB^z&#' );
define( 'AUTH_SALT',        '?l0XIRYjPF:+yN:-#>1xl0h TeON9sjCm@MlaG/~>z[i$^gomqF+~2e=-M}gK0P.' );
define( 'SECURE_AUTH_SALT', '6XzuCC]QHt095V!owmo2s{swMy`qu/zb1d2G*Kug!b`IL&&ROK2kNx:k`wFpHd-t' );
define( 'LOGGED_IN_SALT',   'T}x]vL3s)&~X CS+>BATr0ga.R-u$Y)*6#4C$%N0^&pQPy6y|KQCAcZ:0hEC[!Q5' );
define( 'NONCE_SALT',       '`w_LbM^Pg(Ty_Y(tEP4M1;sl$o!_3N^,,80%88*sPj=G~ev>bD^Tm[83DZ.B8nYR' );

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
