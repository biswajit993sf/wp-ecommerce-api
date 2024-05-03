<?php
define( 'UPLOADS', 'wp-content' );
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );
define('FS_METHOD', 'direct');

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_ecommerce' );

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
define( 'AUTH_KEY',         'U`^]80 ]z+.iqy1{v9Rqw/}_|5@COPYR8.ED)_())NRI&z3y)duTe ^+Aa,/_}S/' );
define( 'SECURE_AUTH_KEY',  'cWOu>|#c YGaK<Uc.7[H]pN]O>Oj&/dX|SNGS+2znX^`Z~]KRpTG{)KS|%m9I2W/' );
define( 'LOGGED_IN_KEY',    'pxTpX-!Nm3UP+J>>{)YaXiVGZZ=M<lF/l,5x`_Vjg!L3EP]&;)#!4DxGw6vXEZzG' );
define( 'NONCE_KEY',        'esh+z[[k*2a_*~Nek:NWy#|!vA6AkIFiC5$-ukqn1}Lo!/P4D5M-.Jr:]84Aa.)6' );
define( 'AUTH_SALT',        'il`uhkWYiLu`p^/WMBr}25*,(g#nF#WSF1,XzSL*wKdaG]c!;o^|U+U#Dhm]`n=,' );
define( 'SECURE_AUTH_SALT', 'wYDM[JfJF)ix)8IfwlS+S!0BV?g-aTDEP(n[0NaW!Vrabz8O?Fp;.5Iz_N9mn!>V' );
define( 'LOGGED_IN_SALT',   'PWULK^%v8Y4)&lm[(h$t7yVKCoBgixtq`g$vJVqa=<N9XBNFw*HII1,c+ w``>8b' );
define( 'NONCE_SALT',       'T3[Cf:AE0O$=1+D568:}u/yLoh T>yK~ae2vf<e`5]4@ g)4GI[o:v?;[vXl4Ju-' );

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
