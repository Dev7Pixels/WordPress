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
define( 'DB_NAME', 'new_theme' );

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
define( 'AUTH_KEY',         'YegUd:sn]5j<M_H%$acd:OEraj##$+r+y}G>r/C$1MFC-NXZbK?Nz+cge{d$C=Pd' );
define( 'SECURE_AUTH_KEY',  'Y6f22n~bk{OMI@xG0][=/MO-dj5! #cdd+BGRus?[d!;7%LC<t4r^Jm82.0[2fJU' );
define( 'LOGGED_IN_KEY',    '|0x.1()W)~5$i7-T%Vc9_Tg%MQmXkUw(m]Qx 2(yQ|.!`%U%+oZa i>X<@qk0M/h' );
define( 'NONCE_KEY',        '^wb4r(N7u-p6D{td1[D9&E`3fNm]@HY]W4pk :/.5WR((APqa3-bY[$-@^Gxyi]}' );
define( 'AUTH_SALT',        '~;6~j99mKDAsdslU*5Qyc4|r=i|UAQk/S8CnMTVNWXjh#/bvf+oCI,| A_8]XLAo' );
define( 'SECURE_AUTH_SALT', 'bpb 1Khk|+8)?M&n,`;T1e7U6WXiK0]+aHv#dP;6!=sV;S:1HfM6u]($4-To_O}!' );
define( 'LOGGED_IN_SALT',   '_,dt64N=wEe@wT_rJzl]NX^uXMZV3SKjF-vZ56W>4YA6$2%fO:[9V?bc)C]u,kD~' );
define( 'NONCE_SALT',       '}SeY^lKpx[~|fe,m{Vh~#0]5`myjtQz0O.bbLWM1!@c>U[eql!o(I62ux+3BIr~y' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
