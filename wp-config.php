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
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'StrongPasswordHere' );

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
define( 'AUTH_KEY',         'o3YPW]D6WnWWtsgoXI kHgJCD132.81hS7JO^FDwy,-,`5#  j~@%02uk/w,o,<R' );
define( 'SECURE_AUTH_KEY',  '`xA|@2v_~e1qpH~2.b6[k<9QAOS-mT+hv1y5`O}ASU:wfMqfZs?&s2(j~q2q_!VE' );
define( 'LOGGED_IN_KEY',    'l7klt}86M3*RpH`d<>#aispx/{N&Quv8r;0!h,lv&Q;v7=~^gm..,PH+)=!V;hrr' );
define( 'NONCE_KEY',        'RV1~(o.x=9Cy#a<gLgP9dkq4QIN&;n4SAIhxf7S@e5kXQHP$OmB.fckYTr~=4YZ.' );
define( 'AUTH_SALT',        '.QTAb7rr+P1e#WE4/,oo&bS%%A}>fx,Qw6s{lJI,ke59YgVy{up):dS7TJPWFxr<' );
define( 'SECURE_AUTH_SALT', '=1bK?`C 3G,VjC7xtke7mUF!|$=af+o50sd6$BvRvAQAp1G8Q!oXnL6(~P{T$_#f' );
define( 'LOGGED_IN_SALT',   'x}Z{a,U~+u].abVzSP8V@BNRq&<RVq5E9?}`%T-/GDeB/05:[d2kg+Xu?(230*l-' );
define( 'NONCE_SALT',       '#$=iHM:`KM?EKM_+c/0mBdha@fn/^,[#0+M~q /5EeKX7*}W=-uA(AjW4/l?0@j1' );

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
define ('FS_METHOD', 'direct')


/* That's all, stop editing!git status

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
