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
define( 'DB_NAME', 'bantu_anda' );

/** Database username */
define( 'DB_USER', 'bantu_anda' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'O`[R[g:|lCAC4N%JxgIdej,G*4lFVp-DR7u>[=B,w}g[gk]P3!)z@O$hR(dg=D0i' );
define( 'SECURE_AUTH_KEY',  '7=+~!McT3ivJk06P{5Lkmde^`*LeS;;=rB~_Dr2fpaiBcXUq+dg~{7]{YR@x+d`A' );
define( 'LOGGED_IN_KEY',    '}.{tjHrTIXet[_,Fs,e6c44Q/s=JY+Q!f$4iv0H{i6^f%++)n=i5lA*;`J@q1rlo' );
define( 'NONCE_KEY',        '3o@dN)o+Y.&9HcPQIJxq2t4bGE*A)6hC3S$W0Jo,GOynVuF(xRrg@r2.Y<4EJVtu' );
define( 'AUTH_SALT',        '@KVm-P,4,P(sT]6zBpHa*9T51~<+D>f9rG1.hHLh|#lvRy)#^<=b>!{ylTfXqZac' );
define( 'SECURE_AUTH_SALT', 'l=.b/?<HT}^JA8r`}|tL-&pd{lPbjzY-68ZK$B,jZ8kn4IIsVeNE>Ea3H`wy!*W.' );
define( 'LOGGED_IN_SALT',   'p?<ONx !BtV4l&(DUn?RBtjIsYkI-5B4A2(ivr=,za{[HD0T12KAxte:gcle2Jkr' );
define( 'NONCE_SALT',       '|KHN~kM[.l-SX0/c2vumxA;bz/u<j Y)y93?ka84SwZc!Y`QaM}:g`y;OfuyGC]P' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
