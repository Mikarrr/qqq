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
define( 'DB_NAME', 'lagasin' );

/** Database username */
define( 'DB_USER', 'lagasin' );

/** Database password */
define( 'DB_PASSWORD', 'Lagasin1234#' );

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
define( 'AUTH_KEY',         '|o`9=sas<N00=:){G363) 3kEbx,JGt_xlbzdGrnErjZ*;vQBCTfxHmD* V7O?c?' );
define( 'SECURE_AUTH_KEY',  '%nQYlBfB1.YV{t|XZ`f`psIp:SK`00>Sn#Kd[hs.l|}UZ8Lnp,ixK1cRlnDZe~g$' );
define( 'LOGGED_IN_KEY',    '6KU|2jlK2a%&!mGN`&}v&;0J2n4oK6~=FP$n@#/JdfVqo!b|4X?O)}yd=2S=;vPS' );
define( 'NONCE_KEY',        '_W|*;R]JZhiKjm.]L5m2S,wV: Ayh2zc3Ip#TY1I,F`:=ZlQUE i-vQ-( $r>(Hp' );
define( 'AUTH_SALT',        'lSR0PaqDysrO$6_*5?72>ihTPTiLXtpII7(J-&8>+bY/=vEQ[co)W?K/y*lV~qEt' );
define( 'SECURE_AUTH_SALT', 'fEc-O<q>@BfZy4F_au%VZZNiO*Hx}R$ZP <`ghYU(6E6[j nxq<XdfG8XNe_mVxM' );
define( 'LOGGED_IN_SALT',   'op?JSPdcp_?+9Ez]6Hg4H&c7!f/SVX/)ge(Ky/Mp`,(2@Sa{u-G*tyFr:P1.C!C.' );
define( 'NONCE_SALT',       'E*eY|CR(>y`IMJe$ ?j^E:K?zpo]:B?xh.Dq/BVl+T:~3],z7fbK>YF*71b18S9y' );

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
