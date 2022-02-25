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
define( 'DB_NAME', 'fiftyone' );

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
define( 'AUTH_KEY',         'z?gf{VJ%5a(6a@g+CDx,AA@YJ5foH,lDDs>X`8>_my1tx`+}ic&MA-h.e*`.#[?0' );
define( 'SECURE_AUTH_KEY',  'e.0BY$A|zVJduKkZ]hK9PxGb`f=0Wu_sNvvNHD8l9AUSrEfj{uN)1C)E$^kD:MMa' );
define( 'LOGGED_IN_KEY',    'Q!8?wzL29z| !*`#U8Q^iu:?5{>omA^k5% v0p~$8-49A K32n>acTQmnTi?y>i*' );
define( 'NONCE_KEY',        ',A)#>YVK[A|U8iaE8mpmJ]&x(/W{@N^AhME7c[>=>x5Cr+#Yf_qO!erz,gN;=$m&' );
define( 'AUTH_SALT',        'S!<,U#MsLZRE6Sk lassz}ztdX~c(,Y%M4Ra,F^Ok:IAy0EB`toPwr=o!<Fza;q-' );
define( 'SECURE_AUTH_SALT', 'eEYHkN$^!xoIyyO-;6I~bR2%F}wz{)QbQ1B]ho,W7p{X+:OtZpy@-D$HRh]Z)/T,' );
define( 'LOGGED_IN_SALT',   '%(6kiZ2eMa7V4@}x+X3xyGwGS[)Fbzq&LT+A=MGY42EU^OmJoX}y].}_g+Eq5M r' );
define( 'NONCE_SALT',       '!Z9FCtB:)&T}24osOcQ[kC[qDt5+d5)&6wKqizBWNN5Vy2NuE#~DPgt)q`]JpaqO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fiftyone';

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
