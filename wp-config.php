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
define( 'DB_NAME', 'sourabhpatil_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nEE6@]gRGX A]:c}Qrgu-gmoWsn46w>@?>j<::Y5@t8bGfG9&j7h3EoUd5vap6$i' );
define( 'SECURE_AUTH_KEY',  '-@eW>_A;<PMqO8hAN.5 4A!jj(wm<]U~z$H<:1rQ#<}xK{eF[)xLiF;V5xQX_XTI' );
define( 'LOGGED_IN_KEY',    'C;)cqu08{oV>^rLN+_Osw`uC+og3YS_!,rD| stu-_Fdn}dz8UiUG`k@h/1JksC ' );
define( 'NONCE_KEY',        'eyhMn:}x|LR(+z1=_Yz1suh^^X[I:w}~^P~,b&/Yj,ZF;&?DT@iWouud>m~)X4&~' );
define( 'AUTH_SALT',        '##QMmdT8$0bf=&+ZxEIE+3W8Sx[{xMIA&/Vp)kM%Z)mU#-!%`LiKbv5Xb[`Q8}u[' );
define( 'SECURE_AUTH_SALT', 'XHD5~)c!QN{k[,T<K.RzH!LfNDs|~_N>~8R,qj~R*F2N[_JOX5KL QKi$H}q3J0Z' );
define( 'LOGGED_IN_SALT',   ')={b%rM8=IDFWl9qG3?yIlw,5kFxQ/(!Nw7DPm`o4>yYArFC+R]kI>h8q&Ceg~yI' );
define( 'NONCE_SALT',       'Wo[cT]EUgih=7K.<rQ6oR0tAx$wSm1BKxBd#25%yE,)^H;aGmS#r*Ps+FMyUw16~' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
