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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '3w' );

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
define( 'AUTH_KEY',         '5|6j-}4r9g-G5Q,Fe*,]xHJ>+eD}e[?*`u sbd>C1[haY1Viz.=(BT~@u7*B0r0U' );
define( 'SECURE_AUTH_KEY',  '5#O < `3m]|R% ya!;{3=)XxwY/l%VHepG{wbYz) MTo0dNve 6v`j16Ke0(P&I%' );
define( 'LOGGED_IN_KEY',    'W,beJ-5/fR=D-*0`^srCACSSIB|5kHVu(T!y]67x@#ERAouTxXi),g+bJgEm&PH;' );
define( 'NONCE_KEY',        '+8S#LlDFXa9tj=A+9X^]-X;pfZ:rljPeA|ODm. ao,GViT<I`7A&)z8b<lGv|AS5' );
define( 'AUTH_SALT',        '[f`JZ,m(.=w986z,LFfl,_hYZ.@.~+v0(ZpS#{C8z+ 7Cw@{P]TgPksCtCHks}Nh' );
define( 'SECURE_AUTH_SALT', 'n5AJPcmb(L`(*g^BrFa0ObrkWd? #5vBU=H84Xq8O={$RL8@^xn~^iuTuCk<vcH>' );
define( 'LOGGED_IN_SALT',   'BKg^Gtw-AvL2G8EQ3+ {dNY<19BM8nQ/,/g bd&DmwSI_{L`@.twy8/!??g!-b(r' );
define( 'NONCE_SALT',       'cG1w0%iz@47Z1Xz?}=%=!Hdcl;MBiWCP>RilYwzt^ebu>ofUwYTnO226o8+:!j:c' );

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
