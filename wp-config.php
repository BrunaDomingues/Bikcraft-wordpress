<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qnWm%eDx6/bq$~3NBJ&c`9y:pknZm@[&RmH^yPpS!s9,g|]|>*#8~Wo./}Rpy?pF' );
define( 'SECURE_AUTH_KEY',  '_/|/YY8EVV<-m59?sF8jlmC?i:WGxI.c&VR%T.(|cRwr4sCDyV5VQ`r_r<kV;Mx`' );
define( 'LOGGED_IN_KEY',    'sEs2arfl^s2)]q59TNgHv1>1<hrC8>)I:wR^z{)<K3;#HASKu-uXm+X:G]r-Z(_I' );
define( 'NONCE_KEY',        '1IHk!1-/v.}s@&3q6t)~,8B5g:^lkr,qqZm&bv~0F8]|ml_]<p!)pp>N?aK}TF2=' );
define( 'AUTH_SALT',        'o={rnmP]X|Hnn<=a|e)3Ejj^yw^yJ|8r-W8g3sZxP,-!f,ch{=%|4B8)Ntbm-P8z' );
define( 'SECURE_AUTH_SALT', '[_YG9K9r9Usx_^0i=g=YJH->+a57 B1IuFrH(G?,{YnGO,#fOR9+ikWa[X):I8NN' );
define( 'LOGGED_IN_SALT',   '5IJEZ8iR^]Wp|EPE+T)bvatCap4  TLHf1;v^%^zk$-Ej!/r-i1Fgx==G@BB$TI7' );
define( 'NONCE_SALT',       '/x#T~,4TSTp;Xc~2|O^_g[a;+16%~R $NyKMZo)$#W]2d/tZK`f WnT>,?L-izVV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
