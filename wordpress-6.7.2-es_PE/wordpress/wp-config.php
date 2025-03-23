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
define( 'DB_NAME', 'blume' );

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
define( 'AUTH_KEY',         'OX+IIHj3(7>Gmtz><HZURCA8`qgWrz#s7df0 ;/Qqp=%Mxe!.=5GbL%cMw-KL8K@' );
define( 'SECURE_AUTH_KEY',  'P;H^BAhA8Wf7H*< ./XWp MV&!ADUbM|%d#mu0]>@85ENc(YQ$i%(uWhE~.>?mP/' );
define( 'LOGGED_IN_KEY',    'lTz5.2r>XJ.,ck=9O~wVz&DZb=pMc_R?>BUxs}zU_~n&%foO]svZ-$X<wfa!}Iha' );
define( 'NONCE_KEY',        'kWx}N`_q#+zR-AJWJ18*iVWH?4pdFahOKa_k:m]Y}yCJJeX29`JdE{R?,t]?5KFC' );
define( 'AUTH_SALT',        ']N{n%zLTuj.);E7XdA{$J%,LH,)l{hQ{^M$B^`>|X4$N|YI1zF|]3/`q*I7vDBP9' );
define( 'SECURE_AUTH_SALT', '?TB~u|TB{+K(_{|RtDMJZ1t*LHt3NF.+}`0}[!.^C}XRY`w*(~.7{1&/u2F`#p+9' );
define( 'LOGGED_IN_SALT',   'vrzJR/oTy3w>F3#~FwmC/*FQdm2c{IR;wbP<u|D}1Bu>ijlJM!4PzmF^|=)K{L>C' );
define( 'NONCE_SALT',       '%V;mavKoWVI?/)A?p~xE3Ab:/wXL9/w/u*@~acu+M)Ekfwa.^V_64*szab*.o_:M' );

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
