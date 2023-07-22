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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u232016825_groot_academy' );

/** Database username */
define( 'DB_USER', 'u232016825_satnam' );

/** Database password */
define( 'DB_PASSWORD', 'HareRam@987' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         'gprvgTVTv_>59auj&>q.dSk[-d&V%Ae#8F/T%`_3:wL}z@uS1.l}GZNQR[7[{K`A' );
define( 'SECURE_AUTH_KEY',  '*3lJ@r Y;#Jk:y+Br!zFtATuT~b1Vgx_&{eV#9IH3B3AVdxo{>9Gq?,Dftf{u:FA' );
define( 'LOGGED_IN_KEY',    '.:clhf]]f:_/2(wxHYAb;gX[R.u,X{*ch.YYcJEU2TkUQ#a;fFwp_1$%wT4ZV,~/' );
define( 'NONCE_KEY',        'F;WfFI*[1j@CGZIox.iPkcj4VNx|Dnvo,#;>+(u1XwpZnA|&>aY]bGWN1e(*ZFa&' );
define( 'AUTH_SALT',        'QS+H$yc_7X#@t:,(42+w49GBs-]=>k*t8UeahO$W-@J{#Q?X{U2^pG8qO+VwaT`u' );
define( 'SECURE_AUTH_SALT', '@/Pvfx+wbI4o%^]7SYz[Yl/}Uf@_)c<sWYXHqNz.#_*!rK 0P4;R/&M9y|R |&UV' );
define( 'LOGGED_IN_SALT',   '_2is+qq[*{7I/w.c;IjXH96+zR)1`f2ZvEP&0pFkS^~YxB2YDMZmiAH*;/-z/,b2' );
define( 'NONCE_SALT',       'eDOs2/KVA(8c,c.e]<kIxA`i7NoUz46V 9/&f)A~Z}1FXhW{TG@-{)_DyKR87@0[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'groot_academy_blog_';

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
