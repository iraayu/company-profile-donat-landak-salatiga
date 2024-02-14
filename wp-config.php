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
define( 'DB_NAME', 'donatlandak' );

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
define( 'AUTH_KEY',         '!QgUOv1%TKEJ<~HWIL_Ge#~EAITg43ppKi1hIoq*rW`~tz!B63:XvZnq?a9^d_qL' );
define( 'SECURE_AUTH_KEY',  'I%tIlYP:/uEQx*-Vg0>Qn&HF(p#3G 6xw^g;U[t:g3=]hQ/!y`gj)OKmHWKe}zDZ' );
define( 'LOGGED_IN_KEY',    '6zfQgMe;acs#B|(=8hXbSf9&/-Rmz=h^(V0^Z@pLy0Z4(N^[{WcLf~[<=50Of>Cb' );
define( 'NONCE_KEY',        '=oJAW71o.mm=*FoSBfo^,n1,BBw5oW-FeDOn!-dX)=VB9X9c,NrckRbGP;[&WstQ' );
define( 'AUTH_SALT',        '<t%PG?}1[|Y0;PgTWGIF[oL@QTQ9zT4,xvN{k;QHv KCVz=cLGL`vk=*}EDFqn_p' );
define( 'SECURE_AUTH_SALT', '.u=5x}3L>_h/DrgpK=5095cf,7HB-NP6YQCE43/<~57Kct6Xu1fS~>?aG3Whcbi+' );
define( 'LOGGED_IN_SALT',   'W}0=FQAks4:X_d(t9!.%}C8B9Q:5Qio[xM~FtW~ZjBRoQ2f}2U:F`Pv-4b7!vv V' );
define( 'NONCE_SALT',       'mieR0e7~g`d@5EA4Z:#,wAc3fo4Ys+(R%W}O4TyFr|u75#xt,@>uc`JvnQBV+QWq' );

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
