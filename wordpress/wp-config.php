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
define( 'DB_NAME', 'Personalwebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'In(a~YPa]T]-3<jT!V|r(g:HArIRTwt.QeP/9OGEhoyV34X.BY::F6@`igw5PT`#' );
define( 'SECURE_AUTH_KEY',  '8*v1E1T~eY~p4H3::=D;4XY K=!UEX1dIVi[UUDp1~D-h?lOac)5l0* F 2,lg10' );
define( 'LOGGED_IN_KEY',    'vmSu/BWkZ[@c>,yw#F~^nf$m,fXj;+1<>RuIXA^{)}sPK;yfkR#jRUUDFqvbfL1N' );
define( 'NONCE_KEY',        'e3*17.{ObZs,=gJw1 g:YFtQ!zx/iWL)%<et3H7&[^3&Y:Xz|2/`Z?Su09h;v,ZD' );
define( 'AUTH_SALT',        'OKEbV?aD_yk%y/QLg}4 /-uJWr<%_d@=Q/~^kg?ap6?%kK(XR@gwTgWR.P+2: |@' );
define( 'SECURE_AUTH_SALT', 'Jz-Fx4VwbHZkqe},`s ZCrwDC5!Tl~,]7qy?u1II8 4l1=Fw} C~-P.%0P`#^^Ok' );
define( 'LOGGED_IN_SALT',   'D95.faGd!|aDOnhQc#tO3-vJm9GP(Lk#]vL&+tcb*_:;e7G<9pKJoQrvz`cOUt8+' );
define( 'NONCE_SALT',       'M<U{BoKi<$K{3GSL9Z$M+.QST-1)e@{w,^giDiG2?y+1x ._,b?_=pgwsQM}q8%;' );

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
