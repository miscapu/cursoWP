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
define( 'DB_NAME', 'cursoWP' );

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
define( 'AUTH_KEY',         'TQA^qf){Ebn`~w:QFlCo}DmV_e#&tqzM A,Xp,n)v~P$nlTDu;n},ew<T{n-rcn7' );
define( 'SECURE_AUTH_KEY',  'QMK,bu-&PDfH+b)D{!V~tA=XL(P8y)o#(^s CVS9uP~^8~MDynus%Ysb_~(se=^$' );
define( 'LOGGED_IN_KEY',    '-=wl> xfFhfV}9y;O6)>YtLL7%irs;Crr?IJ5{}|-?N}4eGNNkdf][tu1k[1R=*9' );
define( 'NONCE_KEY',        ')<[Z-P_:=x?)lui2)#/~{9##OabdPt>Pa4G*j2VdDp^1OCM=#7KbnU^:|6uL1]E^' );
define( 'AUTH_SALT',        '(5Wal|iSS[Veqt.>+Q1wR$%nW0~6[6|bpmo:9uV0?xx>A+ m5{3/rkwv^[$03{!~' );
define( 'SECURE_AUTH_SALT', 'BW-51cH?Sn|6~xo3+:w,jN[`oqqa5f pw?xoH*x5(d@r@NK3EMFn1F`4UG0UP1$a' );
define( 'LOGGED_IN_SALT',   '0x2=|plqz`PpIEka[s)cwy$kXcqj)dltRj8d)wBfNkpAw`U^(hQH1w]jy3~=5[rV' );
define( 'NONCE_SALT',       'BOm!=9V?y}N05F9t02@oxn-A8,HM,4yd)=vrhN]w)n=?c$Tb-lh?Rfc5=YW pft1' );

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
