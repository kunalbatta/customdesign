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
define( 'DB_NAME', 'customdesign' );

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
define( 'AUTH_KEY',         '4f>Xo3%+z!#u_PX2hZb(*T}*Iz5(^@:KKX-qZmbZ~3i,{yMtD$s^x/vHWp}M;|*X' );
define( 'SECURE_AUTH_KEY',  'i %89]<p/}tv3{Imb/c`qI{$rgV!N#>vT:/ybwMPvetb*vo4S7t5fPvp)XvI$kbq' );
define( 'LOGGED_IN_KEY',    '%E9Y&~=J aXZoz.Gh33IsE0tWv5!f,^fS5_Ane~Xfz8B<wt-:J}irWTIko`wL#YJ' );
define( 'NONCE_KEY',        '!rsOnkY=O@K+mOqA=Wyk65 Gu5P)1W11SbW`tPn:(Eo_)db#/ LQlcxf_2`><R|<' );
define( 'AUTH_SALT',        'Ifbv/!/nT{u4B3+{4e7Y[9kVL$6G;er`$|eO)rn<]nxN9q^>6!p858Lat9[bqMIj' );
define( 'SECURE_AUTH_SALT', 'VpGx`J`#zMRoaQ O$3}a]po PiP6$puY3+ 1HD)aDb5R)t@QNR$=mi>$I5u&AJ5?' );
define( 'LOGGED_IN_SALT',   'ZGUxmGi,`(|D4n+7m@|i{~xcvNCc0_QXWl),,jMrG=ULcV=]m)8rSUqfo_LU`Z;G' );
define( 'NONCE_SALT',       'SMP_-,Y)RG-]D#vlTaQs@1 H~ZRSwoelE:z1%fM_p^E$xX@4BE?D$-(7H[Ks<  @' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_final';

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
