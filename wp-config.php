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
define( 'DB_NAME', 'mysql' );

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
define( 'AUTH_KEY',         'w/VLBktVPnAHyD!-nD{73oLehehGR]i6[ou2lk^Do2t0IQn]}~[-b<5-JEZ`C?o$' );
define( 'SECURE_AUTH_KEY',  '}QGL;Iz)aj-,<u&IM3Gfx)48]O6z3&8XI -*MTVM_)x+kj]B*vth-;ES,dorC{hA' );
define( 'LOGGED_IN_KEY',    'g,@n8(%3;0}<Ds/s+Esq[?*{[;GSX^/rs3m.d&X^s/wIZEI]i8*Z1;IF~@/GIov:' );
define( 'NONCE_KEY',        'KwnGd03u0V21hP{>IN>]Xc%L<^Mbu6.S6;08(waq=CQ?pURuYW~/XgaG=pE4Den6' );
define( 'AUTH_SALT',        'x[CsJo)]h7+8Nf{_nWKlqLHh3_QS{xmg!Kdf,TF{?{]dDA@|Z8#.O5SUg+9Q~A0e' );
define( 'SECURE_AUTH_SALT', 'Fsn_xR7y+]V0mw)UgD2yRMKj!}/7dc{lx:Di1BWr DQ9M=,%g+([OK25~q4#~+{A' );
define( 'LOGGED_IN_SALT',   '2^mv|qpizoX}T2hIZeYI9!;Dq^3$0E1i3$[WI<xGiUPM ]ebIo(;T+LFQ|1>GGU@' );
define( 'NONCE_SALT',       '[D~y N?|BIyA{G-gJ?kStjw)`Ns+Wn`Z]twyzPC1<,KJSn%3o,r:PuA:7bP5G-Er' );

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
