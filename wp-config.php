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
define( 'AUTH_KEY',          '~At(rbt41H]MXI)E!MPbn<LX((+$ih`s.eajvYJ>CMd9x |Q2{(3b},6msEz+8}V' );
define( 'SECURE_AUTH_KEY',   'fr;lsA7IOKKF{TI9#rW35y5W7U=H;c^,I.*-9K@f=,!HJNWN^kYFWqi14&!qoc7x' );
define( 'LOGGED_IN_KEY',     ')~sO`8$:c4qOhWpVCOOE1,WI7pV~ 3o7tRcVDE1Q7ZI){lvUugc*Sk}.+Q#3m=Ju' );
define( 'NONCE_KEY',         'hTN]q)a+Z*NtdcCTz/.~SA*i0Fe<=WWR4wtC[!0MsqI<S,OP+h]raV{# R(bZm-P' );
define( 'AUTH_SALT',         '2<1#gbQh]i 1~$!>VN#.`>TrQ^^t6xykEqO,Xz=)nM Z|q/X<[JEu7rMgVO/lZ#;' );
define( 'SECURE_AUTH_SALT',  'Y-%D&:<1_^IkA!c=fSm#o8w=XQT7^3~SW:*,bBE)$o!uF27@XE_V72uF$]|lL#+S' );
define( 'LOGGED_IN_SALT',    'C9s)vr1jw~FS7/CF3x~XR[Y:13L![0^I?tmw|BpvB9Z(_sT!C,DijyjQ2tJx6uU?' );
define( 'NONCE_SALT',        'PYxN{KsB6 Nc$1[Y6r!({s#`(5}%TnC&O~Fa*9]S|-3ih|?%1{)sX2u@27]ca>(5' );
define( 'WP_CACHE_KEY_SALT', '4x>0eRzD6x3i78U]rOf|KU}Phk4&0|.]E5;!#*DkeQ FUXEHsd*rSiLsrAVj@qA2' );


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
