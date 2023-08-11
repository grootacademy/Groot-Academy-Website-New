<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u232016825_1vZ5M' );

/** Database username */
define( 'DB_USER', 'u232016825_S6CoN' );

/** Database password */
define( 'DB_PASSWORD', '3cRiwrGTzu' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[G*6VxB_ib =j#a<LD=:Znb!~]$)?$GMpt:*a~ecPrB6=`+v!_PN@82;Ph&B9ISL' );
define( 'SECURE_AUTH_KEY',   'pyW51dh)*W?|&u!g;Qf;DLcQhLWxr_6u,pUTB,0L5iA}0{-|Cdk!%v1nWzFM5v).' );
define( 'LOGGED_IN_KEY',     '`0qu?t6#z?M,>7?S`lG4lv]xAS.GK2t9sy/S8 K$(Y(/(Bp])54EbZ7W{2K,.F;o' );
define( 'NONCE_KEY',         'h)8DQt_>O$2.MYB^qCChypZs7_ +A|^LUD5e.#?; lDi]jha4kWGg9xuW0?z^qf=' );
define( 'AUTH_SALT',         't/p(Ii2CBXh{`)>N&L$`gMUF<@uP-6*pM(1Fzrj8$wv#!-yK4^ugfQif|wf2oe>W' );
define( 'SECURE_AUTH_SALT',  'k7]IP)f4`*p[tq!hPO2JF`Te`vAS]XFq@D|Q5Vbpw;!-}*].jjD7 U`i$EBRMZ`w' );
define( 'LOGGED_IN_SALT',    'V~~)-;J-#WH5gA}v,U{!;M4K)qfpk^vV%jeYW:NlMM_3@Z<}=i@f&z]h$uQ~jZ:D' );
define( 'NONCE_SALT',        '}dTZNd/K) 9//F@b7|.lX@Y|)KwqWFcSOQ^/.W6q}ne^h7dz.B8|`vj6<f!p,DXX' );
define( 'WP_CACHE_KEY_SALT', '<!9tVy~UMo*;$>_Pz8. [tM)+3(Om>i#S29h!QiEzoArKDe{~4z@@Js).x4[3{QE' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
