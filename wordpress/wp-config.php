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
define( 'DB_NAME', 'php_course_dev' );

/** Database username */
define( 'DB_USER', 'sultan' );

/** Database password */
define( 'DB_PASSWORD', 'Az@HoePinc0615' );

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
define( 'AUTH_KEY',         '{R%V$`YyOD<f]6W()&`fv`8&B,-|_tu2@E^MqDPH?0v5<tD8s2gw!z@5{hNG)dBR' );
define( 'SECURE_AUTH_KEY',  'Ow{FNEoL`,v0`Z`UzI6m$YlM?$tlQv$=~||`;:a<Ja@*bMqu}p]4:x7?EXHpP[,d' );
define( 'LOGGED_IN_KEY',    'UpOOp.H;5X7KRuLi47P+t^>IaP^e%bp-^ZHgFfJ&S367t5*SAR(Q[lz7gp4%?dCT' );
define( 'NONCE_KEY',        '.XK=.xu9`K$gvGY/VfkiIkI@z-[]a]Iiw+Ljm|Fofbh]6;&in!ja+Z6pBrqrKOkv' );
define( 'AUTH_SALT',        '(V~GIdsJIL0lyU8NxX-x0adx5&MvbjzJE8-8tU5^Or0<2Vl}YzeJpZjtE~5C5.m7' );
define( 'SECURE_AUTH_SALT', '_LTS6OJ;H>w1)WbT>+ 1 /3{#@@5`#FI}^}#rh$9c9ZSW)%vixYOkPQtxK]R?c,v' );
define( 'LOGGED_IN_SALT',   '1uQZrBE+CP!f>/%h[[4_}w`RszttDuK+J?+kiy3u,K>HlC6/:=I<3;D>WgOH_=K3' );
define( 'NONCE_SALT',       '&Os tdEq^Xa{mu^SO8neh- b%VL8&KM2<F0rb6o6wrrilSdyxcUY!T?4eQYETR?#' );

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

