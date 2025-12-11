<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hanse_db' );

/** Database username */
define( 'DB_USER', 'dariyatum' );

/** Database password */
define( 'DB_PASSWORD', 'your_password' );

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
define( 'AUTH_KEY',         'T[+pg/P6CUUCx&Ku>BQb## SR3e)L(IM>eX-P1;ez&Seon/kVnYK8/f$XtiU.>HC' );
define( 'SECURE_AUTH_KEY',  'St~6ZL/<H R/o>2 /3N0z,Rm;PjE<VHzjs/m^;:HZiR>1P!qxG2dUJsm]j XgtD+' );
define( 'LOGGED_IN_KEY',    'Uo*R}t&U-3*)aIJ{,{23 cGj}]6s+Vdh(r6n8JfnZKR^%D,s3I9%a&MkUN QaxoG' );
define( 'NONCE_KEY',        '-&!O]Y?6f0~ak$/p@cfe(n;g0%]-RmiY<,NHJpr^nxvAqDIb(WdhK9C)%GqDU]-s' );
define( 'AUTH_SALT',        ';o0TZ@,#U0.mBm)DgupoS/);9h&~#Gg41JiR5ZGYOs1HBa`<>r><d6QsqCQs*_ 7' );
define( 'SECURE_AUTH_SALT', 'uqh<4|d:{J35[e6WG*<7^*L.Qn_JiiSk*U-,.fi6+BU!:]`t,9PUw.ILz%kK/Rg;' );
define( 'LOGGED_IN_SALT',   'NOIbi&a:gi5M,7a#i.6V;3s.8b5}Y6_YQRU,^v8.@>yN/xe<5QEep8U4{6+Tb*]`' );
define( 'NONCE_SALT',       'S<dH~E$re=K0s{*ZPfx|BM]T61P { G;F<{c$.Cjmb5V0s^alu]z2Domy;%Ri2 7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
