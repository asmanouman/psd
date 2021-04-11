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
define( 'DB_NAME', 'mine' );

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
define( 'AUTH_KEY',         'lqpF}/[+2 qMe!aMZ1Wi6fNZNOFZqoBy,>5=M<$6x@cKTH>buG[oB,}8x*)ac>3X' );
define( 'SECURE_AUTH_KEY',  'W=q|[g]J(x~(lKPM=Miu7(z^ p5PVaCj{tl2P?j]nH#F5oOtWOFaHMoE`XrvE_[~' );
define( 'LOGGED_IN_KEY',    '/o=q:0sngik@DY}}:4$EK0t zuZ/T1|sT2!]aU/c%#5/J1[{C$X RjHIw)6l63G.' );
define( 'NONCE_KEY',        '=_3m%esf/;wiw=}gnt60/UvV{U|i%Z]a5gMgljvXa[@?<V|-2p>$h_Ve*JJKx|%l' );
define( 'AUTH_SALT',        'XA,D%:Rk6P%R^G;/#X(rIGDHUX;J*cGBr0vc{ (He&d$?(;x!BS?X.tAgfV&GAi)' );
define( 'SECURE_AUTH_SALT', '?CdQ$}Oa7.doT?LtK]Ta{75=1[2-fBm3=WE$dx4wb>|BX2U^[[;<&7<wL$,[R_mb' );
define( 'LOGGED_IN_SALT',   '^-t/5DXDOYA6$&,AdcP 3oA&hkhiW6E[b-0[o9sR^oLpL=`$7OI)Vx-w%^+DR<%c' );
define( 'NONCE_SALT',       '^W.7o3xkP|a@p#]aaH5[sP_USYxQ?u*kj[5n6/DLrF!g,T2HPVx<30~S_L0~g3=H' );

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
