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
define( 'DB_NAME', 'db_221227' );

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
define( 'AUTH_KEY',         '<gvOyzXK!3=ec(YP/J[o@o#?i&,{@4QgGcI_$aM<8v68dtpbSs`%RnF&GX]7;.N%' );
define( 'SECURE_AUTH_KEY',  '.bI(L]FjgX+m;g_+j|diA:TPGE1X6 ;{?Spo;-<IM(w]/z}JM_jx5GIQQVkO0Cr4' );
define( 'LOGGED_IN_KEY',    'SrV65~7Js6ae!(#L9<FTiN9%p096sfEpH/Ep`AQ daUhm8/lM$5[X11!fw6p*qA=' );
define( 'NONCE_KEY',        'DRdSF5Od4e8zVD7/3A@dDXwIp8x!NB3S5lx8[ynMp7i^*w6XS+Zo{!:Q2.*^#0`s' );
define( 'AUTH_SALT',        'gG@IZbAq@;B?9%dS#xMGGE1Hl>|F!ahy1JB1@4i,e8/%hBDP4GA5~Bv-W4YjDq$ ' );
define( 'SECURE_AUTH_SALT', '0u&?E0F[d{3zxA-yd_j;{0!DdW#$xTey*:QeW?C<kRF)]-=uI1%TJ>RHuhsn[li#' );
define( 'LOGGED_IN_SALT',   '$q+2RI+6hwn9*%Cioey7gMk9-3c)`+e {+O0}=6Kj8+Ovl}{e3E?k[]{pg$P$tH?' );
define( 'NONCE_SALT',       '#s!V*}Gl>4.Tc.~A/ouMU)dfWiE`H0sPtdQBN)v`P#Fc5[:n+uU]|,O@ FG)WT(5' );

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
