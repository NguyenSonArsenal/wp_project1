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
define( 'DB_NAME', 'wp_1' );

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
define( 'AUTH_KEY',         'Lv|}hxjdfw[mcKgp3:V]A<{5gK%Q}9t#4;PFf}f))m_^7BU{[KX1~:3IkkFaKfcg' );
define( 'SECURE_AUTH_KEY',  'Wp0TC-#zbei0YJ`6&{K<75(5cAq(?gbC<KO&o(;:{3E1RWzb_(7FyBxvP.Kkf,d%' );
define( 'LOGGED_IN_KEY',    'VklRb7cj?m]vj]8x bLHUY>oG=4NL$_?:x+`?t~i._?F @teeyHm5u@?;O_wC{x3' );
define( 'NONCE_KEY',        '+(/wX#cGWiu}z/W K`MjDYDczUc!SuiX{=O{V|iZH23Kt(6]N):BEhsXT~9RRJEB' );
define( 'AUTH_SALT',        'asHf;{5jPfM643m*.Z{oc)ms4ZEH,xt4kbYE^4(,F`tRdEKQaq-f=`!p8/)xgkmv' );
define( 'SECURE_AUTH_SALT', 'nioH%a4[Jsft^g?$DtGcTRn%<Zy/:(:Hi+$Z/iFacfxVl?]DuQG3e*f}@`bH5U)l' );
define( 'LOGGED_IN_SALT',   '!. et?~{>HXgw=K~kk<w|}aI&Hbq?~:q`lT4d;/Tytyhr3eE9tX>1XT^K22eR.()' );
define( 'NONCE_SALT',       '`_ 5`V?R0bvNmboEA&Y~uACl(0t(RC%>&~Mm!Nl!Y{nS88i6rPp=!3y9[]|@8Cq@' );

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
