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
define( 'DB_NAME', 'weight_db' );

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
define( 'AUTH_KEY',         '09u.a?`Uq@lyJ?R r7tPkc )51vw[umCTmpM:tO/&E@$0=q(KU[*N6SRl&+C9hV.' );
define( 'SECURE_AUTH_KEY',  '%a{en=a<89R%O{0=Sk~3F%8K|]rs2ItbyWq,h:%={a7b9:6>/m`!N(EmOr6w]| ^' );
define( 'LOGGED_IN_KEY',    'g$ eNj#{:HM5#dyK5%@O/vmo/DC}o^W?p10P[r!VsZOR4(1!{J#9zSaSu$FmxK`f' );
define( 'NONCE_KEY',        'D0R<GxX+f5vcT[NF%Xs[uKl^V@xuu^f_^%EFkAa6a$z)9ns^HtTR7rhvJ>7]!{$Z' );
define( 'AUTH_SALT',        'L7DB&?[6qT{2s!.j<wRqW<DA-}EFBp&9^@Gk(~h9t%*x|=3274k4lQb7&C`D/V),' );
define( 'SECURE_AUTH_SALT', 'Zv?9&DZ.s0 sF+J7{`&XVx*e8Yg(s/A8sY#a>T^*EEHVs|++>ig}CYA 14-xP!(/' );
define( 'LOGGED_IN_SALT',   'vk,2gI_}-&VnRxDY_g}t_i5g`ae;HL<WB4j(MBtWg]X8.v@Kw%T|#,iNg3;>z)Y+' );
define( 'NONCE_SALT',       'lRe/MjJ>6VGd$F935)7^4[me.l3,rcF_e-~iU<dtYIy$~/Vb7yB#/w~I- `3>B}H' );

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
