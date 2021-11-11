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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'H^#mEX/^}: s$APx+ lqLqecV]/A1F !!zbU`f?CZm )[cw~-%^:{Bw78LmtT)BF' );
define( 'SECURE_AUTH_KEY',  ';n[CY*KRmj|UVp42=xrtA}A}R|h^/k%G=NhYo2G %O$1Gb>FO~)YaRY4}L[3_:GB' );
define( 'LOGGED_IN_KEY',    '&0w|K/{^%kKr>3+^*F`y8nA88 LCV80aoPY!?t%^ne~Be]U{J|9%H]gr/]R+.1[;' );
define( 'NONCE_KEY',        'irEU|J+<P&([._&sP[<%b|N 9u(e0ihG-z*+HvRrF^7/4G;/mI2]z)>:5/7]9D6K' );
define( 'AUTH_SALT',        'M1ETUa}@I2y{$2aQ[Na_rrDyn(0]UsS|v>w2}fggLXY/!XVg^bq$>&=p!Gx^ Bye' );
define( 'SECURE_AUTH_SALT', 'W39),|yhSZSxIne6m2IS`;#q>j~K;2)7nG4&1tn{7c4ms6&-%~!t,|Aw@@_o.Q+B' );
define( 'LOGGED_IN_SALT',   'tVI6:6T} ,]T8N-V{Q 8F4Nl9?~Y_OcvJJ39tLBaTo3Uw@/[?Wgvo R:[k=y;RNP' );
define( 'NONCE_SALT',       '.y]2Ak&]%txmwF4G<h@an5%e gabN^_A&dSA#HGxd[F|Lzf[4z$Aup:~Iw[nEaUJ' );

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
