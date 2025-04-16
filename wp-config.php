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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LatamCountries' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f|pc<Vj+>Bj@b-xRKg6PA+su=%p_2Bn$q79UWB<(^PP^`uN*d;?NEuRI.1$&o-LK' );
define( 'SECURE_AUTH_KEY',  'r3joT_#Taw:l@1,^]X/hP)jS5_)skS~UnG>=X.vK)b,xvC0S=X[:<`kK8>82,+?K' );
define( 'LOGGED_IN_KEY',    'Nj]dCU[-FS2j?dVxw2rX#q[Q1 )!p%s#@[.A &)fu4J#]0f[benR^Wg~)D9Oc{J8' );
define( 'NONCE_KEY',        'C2=.v`%; 9I1 [ x6YMGSFtj8xzPlWReWi13nyg2D)9@[t>2S5;mWz|`,QF2{z<{' );
define( 'AUTH_SALT',        'n8z+Rock*rM, sAR8fJ.M;f(9v=fa)~W!}Oc`7]}-`Zq6r3}SFwp(V~]<[[T0K9*' );
define( 'SECURE_AUTH_SALT', 'V]y;NWE6IO~?_(zVI_tS6R+[+Apqt_8m=YPGd-V{:y}7j=1r-/(&C0O2xG-ZP&W^' );
define( 'LOGGED_IN_SALT',   'N79UCNFA-?bvl//Bvds%|,b^|>s@D|mq~m+eQ(JK^bORL g=11thvIZskSU>{2cI' );
define( 'NONCE_SALT',       'U9n{?ab0;L:XL-wEMrD;jwx;VxB Idr?mq,IUO/zv:;Gr.bG=(-p^8X_*J4E!5Hd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
