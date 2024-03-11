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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'zha' );

/** Database password */
define( 'DB_PASSWORD', 'ktzhloveu' );

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
define( 'AUTH_KEY',         'YpQbUR{Z %s]?ijv~1(L`uw62nG]0b5Iu_1k]y?P^uzuzE5jp4j0M(ZJFiGCWfzQ' );
define( 'SECURE_AUTH_KEY',  'gY$S:V`vM,I@`XrpLY@6 %V5Vk]u}.#5EM) + wo^&9J/lPVOs6$$Sf){Gw|R[su' );
define( 'LOGGED_IN_KEY',    'CX5f ZpIc!w}w1UFKi/EZrFe;cbTN%t=jV=J^.OD$YhWd]F5ta$Jq,I#7>#+oRYc' );
define( 'NONCE_KEY',        ':O6&{dg*[OrN^s: Ty0&DMg;)w8IlZ9G0`1(o53CBFSG3:`:_h+>nQ2fmV0^-8^R' );
define( 'AUTH_SALT',        '3)luGpH0smfK=kbTj,@~:bUj4b*US:M2mY5t:&D=MDWJ3m<4i-*-vpAU*tzHu,&g' );
define( 'SECURE_AUTH_SALT', 'v_IJ/{|nplO+]zhp/ptH!%=6JLR|mU:U9qJEkS>Kp1zlNmb(kqfi J+kCkBfTSks' );
define( 'LOGGED_IN_SALT',   '1o.TT )>ya*2JNnis)){g~s`|>qPJre8~6;!uk{W8H]:;/v;OI84Hr#:1EM![O]N' );
define( 'NONCE_SALT',       'nL2gA 61/o*(}+W9s%{m|XTCq>?.+&a!.rEZ@CWNVm3.h|BN&JF>]yiOHgo,(BA>' );

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
