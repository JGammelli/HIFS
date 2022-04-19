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
define( 'DB_NAME', 'heroku_6282eb54d8ccf58' );

/** Database username */
define( 'DB_USER', 'bb04f4e99628db' );

/** Database password */
define( 'DB_PASSWORD', '73f1b97d' );

/** Database hostname */
define( 'DB_HOST', 'eu-cdbr-west-02.cleardb.net' );

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
define( 'AUTH_KEY',         'd<VZ`{hDfbGH(6h<_U>/T 9t}n3dSg:gwP4{HV<ABpk5W!o;CQx=r+[>fCS7rOj%' );
define( 'SECURE_AUTH_KEY',  'frH/iVsiZtDp#/&(pYBtp`2):TdU4M4Y#:udE[zNCtMC_.s|FZ,unnHR-R[8:+%S' );
define( 'LOGGED_IN_KEY',    '7j<3X#}F((L!EgK#]_W2|%f;KnG*!&ZqaRI`LQ+FUkb&fsGF,0{vee(_*)DRdE1&' );
define( 'NONCE_KEY',        '(v|`@>s`H/Qdk29u@rlpa3`o-3bCRb0VfJ%QBTBNs`5Uu_EQCYDSM8#ZTjKcllV1' );
define( 'AUTH_SALT',        'U)_GWh%u,x8t+1-z}x0lTi=x&WU6vo@-Qi1<a# n>/{$)lU5N&yyes?EZ`%llgk-' );
define( 'SECURE_AUTH_SALT', '[VsR~~>?z=:Lb()h,d/4*sTrwJsw:s{(FM|(e0Gu%1}3t1&idu9Kt laFm|2,mmj' );
define( 'LOGGED_IN_SALT',   'v%pXk[L#_/|Ypp6(qt%g@MHbU&k;Rg0LrmpCUrIx2PUZGMH=)`Cp~*`Kf6;3~^z7' );
define( 'NONCE_SALT',       'aPYiEUa)wa`j1JNoaj}arEuOvJzYAkw%.Mi<$)KRV[VIKuGwyj[9;|mz@e,>[cFn' );

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
