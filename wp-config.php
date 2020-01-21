<?php
define('WP_CACHE', true);
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tasneem' );

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
define( 'AUTH_KEY',         ':Q=lQcqxf1bYdnsVBO)lU[Io)g,9_*=LkjDAVxQBK]kjL}b/VXJ[-2)my8`ZJUe9' );
define( 'SECURE_AUTH_KEY',  'O>S4icM;U.L7@=^,k+t54`+?*^W[*t7qv,0oqYk-+i7/JG>V-m{EK(X:K`YBE}_/' );
define( 'LOGGED_IN_KEY',    'sC<;sAAvszp~^YEi525A`wwllB`i2#t}(k6RPG<G@GR:Kl=*z +|3hKLhU4tpYW2' );
define( 'NONCE_KEY',        '|UOiCAI7Ji(|UQ2&Inp$%v>-`8>ag/z6dLHo{.R82JAN#!TS~=kL}.%A5T2,1dfu' );
define( 'AUTH_SALT',        'x|+=GTc9{FLm$cxE,NdO,IE|RKc912*_eA;CM,?:d%{d50#It~U{W#/UZ/Co9kn3' );
define( 'SECURE_AUTH_SALT', ':{aM3OC=B c#OGy#b2[k[u[| 19N9J{&yd*t+j$NdiR{6V6Qw[%YBkRyzK_IU:x/' );
define( 'LOGGED_IN_SALT',   'p-,E8!J$}M1q$-oJ(Yf~AmWKQ{w0Ko|F)Q+rr=}(!>ED1]HKn:dk~+A+)Xu}[)AG' );
define( 'NONCE_SALT',       'a0a2{g]o&_)+5(q*:V+VE/`q;MPNW|ah $4u)80*yC(?AeH0[aZPugN/z={HmQ{M' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
