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
define( 'DB_NAME', 'gac' );

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
define( 'AUTH_KEY',         '0ZeM/Qz|80Pq?tE(!zzQ#S/XEc+XnS.@ukEK{zQ8Ui_8G*9p#{JTPm%b.7:`b@Ta' );
define( 'SECURE_AUTH_KEY',  ',pqlJ ;?@43s#Gj*U x,r<BO4ex~k3Wd(N^S{LUVC;1:#qZcz/K]A68X8W_NCMkw' );
define( 'LOGGED_IN_KEY',    ']iV15wuD.Lv`rB|A$sQNUqD*AcbnS8JECc4mlP_lA,#.PpIE<4,J{O3gg_}Xq+3!' );
define( 'NONCE_KEY',        'L]?`f_`u]BC<5Yg]{FWX1g#.d~8?w=O]s|nI{M#d7TQzvREzK@F0sp9|bi=#>]])' );
define( 'AUTH_SALT',        '03F^2`ncQIG/Sww.@Xd[`T7_fymX0KdDV~d,ovJlc1A,e9=D/1)S^xx+e!VfJ5%U' );
define( 'SECURE_AUTH_SALT', ' 7Jul3stRulYTM=H8h}2t?T[XDffh$/p]5tYV.I!{-gj#T+H!{X8;^Jm)G^b,{V?' );
define( 'LOGGED_IN_SALT',   'yg(t/QH0-uy>ifGqD#:ynws|9,u8NOWu2*<N^PiOzw?0|a4I!ZP0TWDNE19`>nPP' );
define( 'NONCE_SALT',       'qiDV}<r#s]pZ6d.XM1AfLXS^=i/X #7ZNeN^1VpD3,pme3vM,(skY,g^)giBdJGN' );

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
