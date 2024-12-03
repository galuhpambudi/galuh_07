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
define( 'DB_NAME', 'tokoonline' );

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
define( 'AUTH_KEY',         'cZW!A#@[g<2(=ad:&eI85Y_OtFf@iP*h>n}USF94,;RPf8p@hSj?8^MeX0G4N#E-' );
define( 'SECURE_AUTH_KEY',  'l?v&/H>/?<=56|O&pS/`Ux;b&Tc9!Gy;kJS$Nd6VSDd$I<RXm[e]C8M.Te6M08Y]' );
define( 'LOGGED_IN_KEY',    'F,HwrU6q0N}!_NK66;mO%]~XOaF%&P+M9pR/>.q/By8pZAkCeFYIZ VJ.>9Ee?3A' );
define( 'NONCE_KEY',        '86rjukQl~J,Av$CmzW(v,k6GT}QRkZsg!tu9lAgAt]-v)%Bwu!_u|6RUliw=X_[~' );
define( 'AUTH_SALT',        '~NZ:$<1NdcX(6V2>R?TAqcjfzlX_ DI=v-Pn/Qs1T7,Xl[Mt@[dDl/T^O&3/0be,' );
define( 'SECURE_AUTH_SALT', 'ICE_$]xJB.ZWMj?buN?wPF<AID3d0vt|s/]UXE$wdnz[oDDDdBEEtMMG6ZF&Y]bX' );
define( 'LOGGED_IN_SALT',   'H](14vS8hs^U)M461kB&l]_Sytl>J$Yq;1aZYcfER*Ax}UmSY?~,Y[Ge,pOLN`~d' );
define( 'NONCE_SALT',       'H)(Zs`w3$0z 4jdLmV%Oik}6A<;TZZe0M9S/2g[HD9TL%+?V-2=o8A:N5 2qe*O1' );

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
