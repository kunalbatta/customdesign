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
define( 'DB_NAME', 'montrealshopper1' );

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
define( 'AUTH_KEY',         'p(NcfK+C4;3l3>g47LsCH=I~fIc d]0?faqx:*L [KD,Az>.7hTc}Dh.Hth=16GQ' );
define( 'SECURE_AUTH_KEY',  '93b}~SU=KafsZGP%GUq--/aCqEwh/1u%e:7#S1Gecr;b#@7>r1Cl~rM9zaWJt;yv' );
define( 'LOGGED_IN_KEY',    'I| 0Gbd[8VL{s`[EMQlrESR/4P-l-E|`[z_m&*0ye?WWN,/|V%oS=XYw6i +wKM;' );
define( 'NONCE_KEY',        'Vaz8Un~p DtZZjQ&Nl^)?F0@U?/#s=Dn!1d;Hor,T0TB&g!ZH4mi$o5S?Q T:yC}' );
define( 'AUTH_SALT',        'q7:ACE2Eb5:!2Z<v.Jw*P|riJobUon[?!dOaTz86.iD/IGO2`WBD2&j-5LQKbM~T' );
define( 'SECURE_AUTH_SALT', '0QQ`ku|h_Ayn`6YWw3y~0Dw@2PY_%Z1vga-D[IO$B)iKi:[QY>,-hK-V%rK}[}2/' );
define( 'LOGGED_IN_SALT',   '!YlID!(LCS;u0Sn=ha;a]9=3D79~`u6B]g{pZX-#5P)V)`XUea7(^VH[}!?I-)XL' );
define( 'NONCE_SALT',       'G}g>6TU-UBD&RNEXeFXX33gcLk/9nCge]<<8JvPsG)r__Z`|u[4RQzqq8eM9;c|3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mtlshopper';

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
