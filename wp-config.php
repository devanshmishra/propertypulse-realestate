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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'propertypulse-connect' );

/** Database username */
define( 'DB_USER', 'devansh' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '1I3,0.i{@hBDBbH1$QdA<E111yYVF;$|)M`-`}rl+lr>xEw}pVwl/tW{kX6I/A2a' );
define( 'SECURE_AUTH_KEY',  '#l_!jytX!k1P;,W8oY9t8a;cD3c}HwUSz`dL|8*ZG;w?DwK=}%wmF=?TDRS0^n@Q' );
define( 'LOGGED_IN_KEY',    ']?Bi;Q0V?SW}Gr)7oQA>-{AQgK/DOk>]Ked(:ZqBct:ffg.I)m35vUVL$|Yxz7YS' );
define( 'NONCE_KEY',        'c4hez0bV<ot_ZTpoOi+rj(?l<LSV/BQnu(=<S-{#|<iJ;P5OW/xF#Y7nPwcxMAQV' );
define( 'AUTH_SALT',        '>W_ByAvuuW:jJYYhp;#Yd3ZQ&aGw8>YU}}dQ>>tDAtcZ+!O@1x8r sXr:M(dO63Q' );
define( 'SECURE_AUTH_SALT', '~+=KRGn=Rtk,5GLuyvx/QyE^V7:p_yA z<`6VvL^,Sn2QW6b} -SC`G!9vDxHj^d' );
define( 'LOGGED_IN_SALT',   'F>-k;= XO$-CKyoZpr J24lGH-x0]G>aHjE%RGZo%$J8/:@.2<j7GsK$t!<RW~_e' );
define( 'NONCE_SALT',       'g$Eo!1,<l8XudNO&-OLaJr8jlSI}8Nq19XZ~X{Ba,|* ~Ku&DYK*-xqche;_;`wG' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
