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
define( 'DB_NAME', 'CashFlo' );

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
define( 'AUTH_KEY',         'V4`CZF6E 6Q_Xh5?SJ:(c]y!23}Svy<xLt;gmaD1D9bm1TTZf-.!H_mMTyFh)-v4' );
define( 'SECURE_AUTH_KEY',  ';veC-m/xR4(+Te{v`kIR,f;N}Ak2exLwL/AaQRQ>m,>YXZiV+L/+lzDfZwe.$&uw' );
define( 'LOGGED_IN_KEY',    'U__JR7a5rpOSX<bdF]S=jluzv}zPm&BfOadpsi0n*B@z19Umz+c.PD#jnQjOxEe0' );
define( 'NONCE_KEY',        'O5a,@Q% &WqFH1XEK<3CJ@e+YcS)?QO-:7GLr.DR<6r+u_T^f}QqT8MGg6eU:2Ut' );
define( 'AUTH_SALT',        '(^1?)a y{Y0n~2IuZ#1$>9#cN5t!I0Q_wR1Yry[5XaG9Z:1[}/KW9(~XRMI@XTN|' );
define( 'SECURE_AUTH_SALT', 'x@3(cN,lZ0++sfGII6U&lPf75(R<9*DEBHc>.&3?q.o!mk8/nCo{v#1>B9ry|hTV' );
define( 'LOGGED_IN_SALT',   ',a!kKIv_#x>sOvK-?W&7?B).C+GzIltg-C WBTTOuE`=MlPt,Hydl_|PoiJ4IS?|' );
define( 'NONCE_SALT',       '5(BR_ApY:+fr#p0=dsn-Mp=TEYXD*K#_V_d a/o=45qB**`+hq_t@tUtkZVZyN*Y' );

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
