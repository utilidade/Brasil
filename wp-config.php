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
define( 'DB_NAME', 'brasil' );

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
define( 'AUTH_KEY',         '2!~&rV* .@|tN$Dfe@lILo4eB?u6hbcY-HaMn;.0(]5SXDND$<aqQzTz8L3n8X+$' );
define( 'SECURE_AUTH_KEY',  'H(:fs@pMOB4eyPIj#!dC,|L1JlNHl[9 X%MFFwwhf$~{GhMWtvKE2rEHim[sP);3' );
define( 'LOGGED_IN_KEY',    'bJk|O!,ff4?5:b;^fXi;Tze&/=`#L+3>kc>9JIFqW[P%CPJ]5[n.#H#+7PSED+FA' );
define( 'NONCE_KEY',        'TFWm1z@[%Xo4K;HIyd}r9Y1EO2u*KM_Gb!aBM$i&nyH;MM!x`cJ73oMn??PR6u`b' );
define( 'AUTH_SALT',        'vZQRGtyHK,VJl6%X>(utD9CR3X}<|p$G{h.#-mCSy_fiVEkIX^Jify$<LB(O`g_I' );
define( 'SECURE_AUTH_SALT', 't,Pnb=bUsEm+6=s137x6{%Q$b:Oht>s?P@1fO%sp,mO$S]7`pD= vP86lE2z7Y~O' );
define( 'LOGGED_IN_SALT',   'b$fHGrr4e%+@Yl7_sxF/fZ./T(.( ?re)ZD-[pgnCjeg>6;CG~)~4_,ucaMmT0z{' );
define( 'NONCE_SALT',       'Tu`RJphwKeR8k9.<p?XQAk_s[)M_rM{A}%oCHeA}TB!xI=qVKgl+&GvB;;7Cgg:A' );

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
