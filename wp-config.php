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
define( 'DB_NAME', 'lesson2' );

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
define( 'AUTH_KEY',         'n#R$cUy|!xWX> 13xmsnx7sw$cv!NheRl0D.Cw_*ov%g<=:qW{tK>~V/,kRm+CM!' );
define( 'SECURE_AUTH_KEY',  'U?:|LQbuWJ18Q1#h*[!cs~C~ZmQ, axgSWQo!bD([Pa>3L4b|Jg5`X2sXpABex*C' );
define( 'LOGGED_IN_KEY',    '-0`KB4]AlfQ-}pLd7_{Pp@X=AVm?ec094M4c61bZNv0MRZz/ 35tscBwFXd{I<0%' );
define( 'NONCE_KEY',        '``X}!wVPE7.P;.p-G<IP^u%QQNbIEAFJP|N^!frn:O(n66QVG+ F)R<9AAi56M.}' );
define( 'AUTH_SALT',        'as@EI;!ggVQ3I%$Y-5uAcZ4}A?)jeLk|vBbl``n> s8x8epI}qkPSUaSzH)}VuR/' );
define( 'SECURE_AUTH_SALT', 'aw==z3&7,i;XDWU)8cQJ.bNSz=CAYnQ;>eT$_s;$qh>O4?&d[Hf6pR^%=?/7I1wB' );
define( 'LOGGED_IN_SALT',   ':&*>17h^:;:q?P1=e~nEAy3(]Aj*,6-J}Lt+4HA)a,D_t{~Kkhu:g-WCPlq!n`wZ' );
define( 'NONCE_SALT',       '0C$!45m^=wu2TaTR/Rn+[ HWAUx5y1Bg2gO}k(`S0;g+2fPp!0Ih9k#c,{Uu,Npi' );

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
