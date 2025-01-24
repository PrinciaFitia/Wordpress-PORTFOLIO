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
define( 'DB_NAME', 'Wordpress-PORTFOLIO' );

/** Database username */
define( 'DB_USER', 'portfolioadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Meteorologie1978' );

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
define( 'AUTH_KEY',         'L,}!<ZG05WJ~8ubBz7*upB8,2?xRHHpm>A&{_sN$of wX2zjH>|lcoS!QG!sUW]%' );
define( 'SECURE_AUTH_KEY',  'f?A1Zk223kn8oSQH /DMFQ_u=mm.cY.*F$ #8F|0-o@To km3/o0E.P&39br)l7T' );
define( 'LOGGED_IN_KEY',    'U. imT3V>fL_uKBsJGi)[2$`2b<._T5*mtvg63fuh7_a%ToSf<rXHfmV1W}5Dw:M' );
define( 'NONCE_KEY',        '-RXGk26JGJe!08gu3/|lIp0V=@1VqZ(*=h&2HZR!4;3(=NK_j:=Vs6G![!>/{[Uz' );
define( 'AUTH_SALT',        'VwMD7PqnfO0eOd}zYSp#d+J>I^aR~a^7aZ}@(4uTl6RW^{*9A~PIvw5.AFO*H]Y?' );
define( 'SECURE_AUTH_SALT', '^Sp-K{K% rMZPV,i37pXSO&ok3Jb+7gSOlB8dA?-KvZf*UKey`p(IpgIWl}z}yC%' );
define( 'LOGGED_IN_SALT',   'b6sGK$~G>6znn:gI+cP%fT<`A%cWr9$DncY/vu&.S)dI7/FQIGhc/b):}#YNWIz*' );
define( 'NONCE_SALT',       '.c5vklgBGzGzwsgran?EruMs.Yc?4[ZRP!]Of UR]RG~M:k~R;5dwE%f!TB:`H~(' );

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
