<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u770151235_l4oj0' );

/** Database username */
define( 'DB_USER', 'u770151235_Pduvi' );

/** Database password */
define( 'DB_PASSWORD', 'IU3wBm6g02' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '6iK;w>vOE5hnc2I:YJju_Mu,VTwOy.ZLvHX7*b?)e_Qz8KYs72xUiyJ89`C<ROyv' );
define( 'SECURE_AUTH_KEY',   'rIlo(smQVkz/|(=y.UT,8u.^{,a,>W~8C]8|F@)oNTRc_m@Cz!F9(}*;aU=960N#' );
define( 'LOGGED_IN_KEY',     'q7]Tq`e)yo8xC>ef,Hcr8c/Hc1?4KKRdX@ZM2~I{*?RVh8tj&]G~rm,EbGJ$hwJ*' );
define( 'NONCE_KEY',         'rpKEjy7>O36c370+99msla-6%A!dGJjF9ez.%N(vo6BygfN!.AB7<ai8)6yZt Y6' );
define( 'AUTH_SALT',         '17Hsf[aQv>PJ96yb@,C|[{!-uh$bz~LW8=^!$aigU:+Gtc]7G>]HtW44VBwyT=y+' );
define( 'SECURE_AUTH_SALT',  ']cm#i8:^*}4oB&3crk*K;$X0MeR+L4_Bwah*=$$M1yjN8nV[4l,^#D%R^=T2%jQ+' );
define( 'LOGGED_IN_SALT',    'S{W$zW$fr(U,askB9QbBaugWV1L427OS~`Y&;{GDO_d`:=)D@<c#@##i&47DAZC;' );
define( 'NONCE_SALT',        'gQF]0x82DM|g4|HH;S6ItmgU?Q)wD%+gj_Xq:}qZQ/Mt3a?,,RDUoUho2{YgnyiU' );
define( 'WP_CACHE_KEY_SALT', 'JE+~ipQ7mc.n492+_6W?H[soY!V!S6Y0b9|%+B3:yz }I)<F`Y@)]-?ql:Qit`E<' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
