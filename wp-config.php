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
define( 'DB_NAME', 'web-basica' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'hA0&TL[;WJgXQyo!#mpSuleYc!O8Hsl dW=S8p,7&y]j=u8~e(|s3<qx5[bv H(>' );
define( 'SECURE_AUTH_KEY',  'FKP0Ig6mQfS1%)T*K}U,du}KBulqS~V/M[1)JW_u3[TD9+o!>:pY?QIeXlf@oTMP' );
define( 'LOGGED_IN_KEY',    'B)10EdWzN=/s?OoG:3<MRkJe];:7-K-}01?tWVZ[,2~990s((YbzJVt> g_i$gE9' );
define( 'NONCE_KEY',        '(q5.I`kDYCUubWhO&A5/+fTV_?uf&(1o3}E5.Oky4@P]]%ceYJ+V#l.file3+bx0' );
define( 'AUTH_SALT',        'ch9QPdomg5tZBM;~_iEa${p-VMy1|{MBDOg%f-*!$vVC6hx}BQ)aIY&;tp9 tk4s' );
define( 'SECURE_AUTH_SALT', 'bm@H`<D#Os6*Pz.^:D4CgtG48fsMn@/FR>[%(6UyLJ[~17,#bJx6DIc;|gvw*Cff' );
define( 'LOGGED_IN_SALT',   'kWPk02*>jg[n- J`V>C}vT;uiK>97S:(<g2h[C#];{8P >;kcn{v[3zREiVW{=[y' );
define( 'NONCE_SALT',       'bC`vZZB,*%<c/I.)%yM,s<I+4$@i_r^oz%::#eWXGs?*1H_Fpe%M]~{.OLOC>@@`' );

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
