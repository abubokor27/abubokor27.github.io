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
define( 'DB_NAME', '02.jupier' );

/** MySQL database username */
define( 'DB_USER', 'practice-01' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '6*I;9,>m;eai*4p$w/XUBt?mI}qr&t./<Y7q#&)F%6rL9o7:%8R9VP(_/9v6$E{W' );
define( 'SECURE_AUTH_KEY',  '@GWwwg*0%G2DJj7HR!ij#+XR6-i9++@3;f]G>Ru9wf5B( 8^txuN9!/HV/M9m35t' );
define( 'LOGGED_IN_KEY',    't[~j^ll@6!2S+mci0@SEpWQ>hBMfP4S>Db27[e+ 1*sM~]4~{5s.sfE|Q5^#z^@:' );
define( 'NONCE_KEY',        'Y/CA#>]q1D#E:hA[y^OJ{*Pv4$0pM,}lnK(Qz9pmLdB%BIe:TF4} YXtq:dWI?f9' );
define( 'AUTH_SALT',        '[`YXT,QbYL.1RdrT:fx/]~[I_A-/z~nJOsl,rWJ_mh-m^;i^il,F31YYlr7gt8ZF' );
define( 'SECURE_AUTH_SALT', 'u[0;pU5jQu/)YmO@/$*6$<2_5,olc=,+pr7?smg%}29VW_ir32psyyms@H7eXj q' );
define( 'LOGGED_IN_SALT',   '}f][q6N.8F%QU1K>58aU<9BR>`;4|>> J?f$=^+HV~0xQ;jDz53Doe.APF(w.h$x' );
define( 'NONCE_SALT',       '`nRR*aL# _aI*;Ho70)g+PN<~sn.hMpIIl(r0QP~{gv{*B9N,^/@#^DCuZ7&@Kfw' );

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
