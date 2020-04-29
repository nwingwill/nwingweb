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
define( 'DB_NAME', 'nwingweb20' );

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
define( 'AUTH_KEY',         '&Dcp:Sw: 5SALa9+}#bV_~*1 u!s>^c$IwXa>9)cvS!~HL]/SbTV!sQ<O{j#hRF0' );
define( 'SECURE_AUTH_KEY',  '^G~_j4`5%x&c=n6ZJ7BYj4m(MNd:SGWBaBO(,=gUx/j&jr=>(s<mF,Dt,H}>?ITe' );
define( 'LOGGED_IN_KEY',    '|>lHwE43F{+icI^H51$D]xOfDc*H`,,vtz=GS?zTI$k_7p{yy[jy1LXKBiWCO5<1' );
define( 'NONCE_KEY',        'HKuQRg69 @)nxd{[mg[Y9`n0HdMS%ks]b1%i9BVu6$.>GoT]^f]qHaal;nVs@_*>' );
define( 'AUTH_SALT',        'P6yK=i4il1:uS!3dC>dj-&K)2d]Vb[b=%&CDF68*OXF}/_SB!++3{ymUE`sVI]yb' );
define( 'SECURE_AUTH_SALT', 'g|)z@.:W6]ghEpwT(9UVP4$vwO{|:i^J45]7}jni-~z7BVWgMVsp,`0y&/b5/S8F' );
define( 'LOGGED_IN_SALT',   '!e%zQt/].S-@Yh00RX0;bx(X,`vH7|EP)dF;XP3 PU^(J}pxIWW~Dvw;j8Ne%,]$' );
define( 'NONCE_SALT',       ')!uT%G]np~(0Q3NkB_MD5*d:tJcQ2KDvlzJ(}F|auceDI`4idrNeK8l=hc23T=o4' );

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
