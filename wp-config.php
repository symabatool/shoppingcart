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
define( 'DB_NAME', 'shoppingcart' );

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
define( 'AUTH_KEY',         'SQg|=@Cvx>+vArV1P`(1BSbDD$:QW7(PnxA<7bY!}$=6JW.*rM>@ZWSEYO/aqAvN' );
define( 'SECURE_AUTH_KEY',  'r<!]-oDFMz.Xw|/z,`c79{^jUvD[6lO*?>Nbi/3yKO.P>WZgud{K$)IPT_juKF5V' );
define( 'LOGGED_IN_KEY',    'mdDo|iOCW!z+jsMR:oT+(]#UI1|gC#|sUz7{x0;-;&<7;W*&uK`gt~OJ*J6x=yc/' );
define( 'NONCE_KEY',        'WZz*g@.w~GB$=K=u]y-oR>U$[UeYvG)q=6V4?1|Yp>>FefrK*.R_2rdQ1Ldr!w16' );
define( 'AUTH_SALT',        'X-7+s${P/xwX.2ni r;iBDE3_eEnYn6NE@Z9S#K,j(N-^gCU,uM7XUM t3)_U6)`' );
define( 'SECURE_AUTH_SALT', '+ETR#,?a}V@irE}K$<e|b;~SMdvb-Z>,MiM0cijUXMD=NMk~t4E5>uC[3lYPdzc^' );
define( 'LOGGED_IN_SALT',   'Ei_ 5#9rKs4p<dG0mxLb<@|mstr|W(uz|{0s!{*8|U_aex*i,>e8=2g.sWq5C_h#' );
define( 'NONCE_SALT',       'Pp.iI[8@(H&_/[[~t$&QPe]8$|c_9?TPCBi34py7HL*qag3<#dkzL9l&ajDvUg.v' );

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
