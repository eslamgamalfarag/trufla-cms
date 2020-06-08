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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '%2;:tyB@wW2y8te1R5__M4K8lYiVtbX*wLDJw?SduHuM!J<Q:}VnvSxQ;EkvW}7g' );
define( 'SECURE_AUTH_KEY',  'q(ZcTehjvr<iX6&H*SyM#C9`N=KogsqSaGAm)x?(Ni=wo6?Mp01w1}toXOE[-{!d' );
define( 'LOGGED_IN_KEY',    '^aLat;L2.uQT&]2YrFgwU3q6MOwl5u;^XM[,Ox6)/8]&NN@+sN<x-zX55de1Hy4 ' );
define( 'NONCE_KEY',        'X<6?<*dlNmvQAyibUVia.0n`6UlTH~C~*_6Ok)gNGHXgND2c0at<<~Q0,~VZ[DB-' );
define( 'AUTH_SALT',        'jclBfg[L9t4qy *2]s,f*r&nxTm#,$MK_us8kOCjb<>Rv<4$cA/@dF`c*CE0)Y52' );
define( 'SECURE_AUTH_SALT', 'm]R$j%IZM+#ikrnsw?KU/0#+9iu?beMM^==`ZcT;vLKKTQx!SlXdKMWKzMO(/[g?' );
define( 'LOGGED_IN_SALT',   'eRstx(%TdLRIK&+!,yawU(!d0W{KIxm6Ta:mFKB&&n=^iEyvA!SePA(qIyb{[v~^' );
define( 'NONCE_SALT',       '&O]xQCq{-0~BTmZCdoR_5J+MUZ`>A9LcZOY}qf=IqybFY4zW&WPO`)zM4HDwZ~O&' );

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
