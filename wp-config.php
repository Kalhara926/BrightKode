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
define( 'DB_NAME', 'bright' );

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
define( 'AUTH_KEY',         '$)z|]Rls9[kb|4yIW=,p0cNX^`tlH:t_/5_qI5pu0 AHDpkr=dQ)E7e#8At(Bt`D' );
define( 'SECURE_AUTH_KEY',  '&UN7ffuU3PMz_CK+xQu}mU>R[Rx<P?OKW#~OEGT8L!D:RX:s?|Uz)nYkmOHW[yf=' );
define( 'LOGGED_IN_KEY',    '=wkpJZT>WLS^U0o9+p4; h}3qK0D/UAjc5@x[(faN+V$5%X4riqAQ<A>uzY8k|Y~' );
define( 'NONCE_KEY',        '?I]_3RBb qO8-_]Y^yPAXAJc!}E]KC>$9Ze/N{$5rlWxrx37Z@hDi`UbP2bw7JfZ' );
define( 'AUTH_SALT',        'Nzs+@%AAE8!mUmD0&}a|tT4F]G1W?dRLK1DCW(L/hv,}ui8/JA<hr078s` aj#}&' );
define( 'SECURE_AUTH_SALT', '/.h,Px_:.l!,^$aveTk@T)+URNJe:*0{`5_)!4zCaP%$R,JFd]7D3^&E!%)})XDs' );
define( 'LOGGED_IN_SALT',   'rfIKv!TdJ<54 C0{E~]<Y]lSXYp&:3W3?b:RIG=~FJxean>Dsa+02yq*_=Kl`xSu' );
define( 'NONCE_SALT',       'zGfGeQ:+./Ik(Su+qSClTf,o1k7zp(sJLO:D$FQX^)f^55;.TO$#/lvomRhmc^}^' );

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
