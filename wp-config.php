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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ZvB/?}qhd`$uw8&o4-oLN10}bI((^b:FG]o!ugUO[^ce)j-dq1&A0,l&eb<#qqs-' );
define( 'SECURE_AUTH_KEY',   '9DIob89h$*n9dlzi,GBi]QDgdFG:{E-V$T<Xb*,|LcOBp1+^:xdCax_F6Hav[2d-' );
define( 'LOGGED_IN_KEY',     '%9KzC$|I;m]}9m%aK&,a-`#7`Yc#-7Av8#NP7tvmbCEmraEV5+w((D}pk&jHIQ%7' );
define( 'NONCE_KEY',         'TtqU31~:G|X h`mQUYe:1lrjiPm~%opUsMHT_CDTESQg|O2a`o4AnKvmzS&6BYAU' );
define( 'AUTH_SALT',         '^TnMbNKdDnNU(kwTOvQx~Dr2~;!oBzjkPF+dV9SzM_!/#Ii=`X]-JDW6MA:+sGbx' );
define( 'SECURE_AUTH_SALT',  '&ns4xy@QVE_x-42R9-S@,Z..e[}Yd.M; n4|9jA*}i#iiYV`YTt7^x%`AgmjVSPp' );
define( 'LOGGED_IN_SALT',    '71cz+t3~LiCNW-A&z)BsM<iHS {eK-AaBT}2Uu2c(:1z:gZUtHjAwI+1 Xe06iqU' );
define( 'NONCE_SALT',        '7 #DcE xMmVD1Xz2;nUbA[p!s^(0{*=K4R0N|w)Y[e`!-^lW2%FQO3w+b8{F+w?b' );
define( 'WP_CACHE_KEY_SALT', '|KEJg3Wo%izy%{u%}dH8[,;Amc3h)}oI*a=8_*;x*?p1n&<!:Em|2D%46*]sw;/d' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
