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
define( 'DB_NAME', 'wordpresslocal' );

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
define( 'AUTH_KEY',         'tiRcCx84RaR!}{tN`oPFLBZf[dBRd~:C}$U:_JmH%JiGG^y1%3*@.dgh+ 1tWv4d' );
define( 'SECURE_AUTH_KEY',  'Aj#[2Uo^H#k1:9]l/c^2o!dK1qD`jALakUaAn8[+ObUgajG[z#n.A).oEzeaP#Qv' );
define( 'LOGGED_IN_KEY',    '4Q>@G$vyg~@QO4}PPUNgbDgP^sB*,s!Q^)2EV%n2%@H[RfXlM.hQX%04ffm!I@ID' );
define( 'NONCE_KEY',        '**bsw^$^SvF{j8?{*rEL.W7Q) L3a5Zs(0a3k,>/-h?Nx99vNY5?lZzOS<|a(M6~' );
define( 'AUTH_SALT',        '5Mm(cAd_,wsvwxq>kar.zxl^qkR6PNT{lOd~&MrML+5}+OhR].in{bO;l:8@Kntc' );
define( 'SECURE_AUTH_SALT', '9cO!kIIT~9/,P)B5~vN2PbImolH4`Vn6h_@`aZG`zv%ZFvxHSnTM~eq$)GD0B,hg' );
define( 'LOGGED_IN_SALT',   'U+hhKy|C^5FQeMm5RZ)GU[zfuZYVs~_IS5p5m<UcZcYJX/CtsoR<[.7^]Q_UBG{Z' );
define( 'NONCE_SALT',       '0C~|z;]) 1ek?h{gyFu!f*zI*P^sgXSR293-)2< cOP]#ltXB-CxSsW9Wm35X.@J' );

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
