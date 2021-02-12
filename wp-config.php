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
define( 'DB_NAME', 'bikcraft' );

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
define( 'AUTH_KEY',         'PHYNA>0~cv`vS(T2ZJiZ42RaEN)Dh/i)6i7-J^=xI)@7cI@5mrc8}F{/b0PVK)~}' );
define( 'SECURE_AUTH_KEY',  ']6!~V!>R6 p$+@Y!^jki*8u]|SHXbGX#V!/012Q{f LlBa}m3w<alBG>-Of9]/Qu' );
define( 'LOGGED_IN_KEY',    ',dmxK2J,E@;(bG[uY==8@|ene8Snxb!K.bj.ucdir[G;wUe>|!L8H*.cVJ(m LM{' );
define( 'NONCE_KEY',        'urh$eIv_%t3X-+>@>o0cs?]p/jWT3h,R}@odj.xn{b)s$kP4)7,1-~uz/(z..su3' );
define( 'AUTH_SALT',        'x2.Z;4~:q*KLZOwME{?FfWo>SQLs+#8Px.H4L-ZN09**C(,tc(tC1z/{F|ra^:Tk' );
define( 'SECURE_AUTH_SALT', 'WGb|x/>[_W#F/qm2v=-rE?waHhH GeVY}+p/4h]PGmT RM9>M2!&2={7E*1r1V2]' );
define( 'LOGGED_IN_SALT',   'l~r`/d<R]<_6l-;Rm65eQ?gv9{e5jMK#Or]>e%Uo1+Ctvf<S(pidH2RAuF#;qlss' );
define( 'NONCE_SALT',       'wk-e70eqh<YPe_;:}L[Q.+d$t:5bP%J:^<&sQ%M4Ylx)M@H0ai{: ?]%aQb,r[G*' );

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
