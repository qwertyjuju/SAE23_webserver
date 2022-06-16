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
define( 'DB_NAME', 'mariadb' );

/** Database username */
define( 'DB_USER', 'blog_user' );

/** Database password */
define( 'DB_PASSWORD', 'S3Cr3T!' );

/** Database hostname */
define( 'DB_HOST', 'symfonydb' );

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
define( 'AUTH_KEY',         'zx&31)mSVRqUxdkaYF{/r8Jg+-^k%$@S3;+$_De0+N=km~`9mGYP[g/ ;2wxs~CZ' );
define( 'SECURE_AUTH_KEY',  'C|a3Asd;0?rIK3q2Z~#_;X`ZJB~M))bDoW}wSA)Yi$ qK_udl4N%QlZdgbj7a#C/' );
define( 'LOGGED_IN_KEY',    'DN&]$w-by)S5w7>fL/>kLj1?DS4EqVW1oPa8D,nd;CQn-Tq[?<sYb2=?^3miqwBc' );
define( 'NONCE_KEY',        ';bS}menfc=;8JrLpaw|~UO1#S3j%OhwE%OfKY[Q)nWDh#7kWb@zLNqcE|>Y2&eEC' );
define( 'AUTH_SALT',        '_lZwZE`*}Jfl:{K-L|a,{H`E<FnxZ]dW(^&f]XyGRBkaJ,rz{?,<p}W)g=H<Z.+j' );
define( 'SECURE_AUTH_SALT', '&.+2!+S{(#R<[(GccWVR|[G5-V[26h+S+h-SWp@E^:xE`*&gD^LCYS9JCE6}Yi@r' );
define( 'LOGGED_IN_SALT',   '+|2R|Yt2 b0NV;pD3>wpC2y;?HEv-NkP;-?9RxKlt^fUGGmIcA+`U{>F{>yhm[K^' );
define( 'NONCE_SALT',       'd!]:>}Pr}q/rI*^H#=t%yj0`tso2~T;5B^huw)M&#48OYWAqr*s>vB,Ew+YdJQ$K' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
