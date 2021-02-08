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
define( 'DB_NAME', 'ft_server' );

/** MySQL database username */
define( 'DB_USER', 'lhawick' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bonopart' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'm#Sn(h-|2rwDan4`|W4c-{PZ3>rH5+03z-`|`bvKgin}-|R~,;M~Jmt?72`X3C.U');
define('SECURE_AUTH_KEY',  'wsK)5tF5sB~+-H4^}wUww49|;F`_I>[I;eVz8x:X(Md_?8O+ZwZTmJs;wDX#|?TQ');
define('LOGGED_IN_KEY',    ',5~ie0MIPXxl)MQ30_=]>WF2-[kv|@fm|3Jp2^b[4RF|XjY(qZoC}!4*.r[q+R^C');
define('NONCE_KEY',        '<c>o>EOqb@b|}Q+%M?WrDl!)h-}q~VDX8-,PaG+?)=%J-D1&`B#7FP8s_)WR(FQQ');
define('AUTH_SALT',        '@l@Nt=pWPZ<)c$o>:PVMK=cTrvAGw~9`jo{8mg1p9Pa-4ndO9V[(Y^N;E0g[&Z|9');
define('SECURE_AUTH_SALT', 'Wsq2{e;~F:=hXSISt+$z;*x|P@}56gSg7-9L*+0&gxF(TuIJM&6N[+[KV{E[?Jcf');
define('LOGGED_IN_SALT',   'GOx6e9_[(^JKfbtER^~u|(.Gk0vz4c{<;FHfbSKn&hW[)btiIo_Jp1EwlrHB`3CR');
define('NONCE_SALT',       '+xxSu-Q[L/Vry/y/~jjRVSQ@ra+?5+Uad+ZDUvE1&q:b DL`af*Ow5[eImLp1L$;');

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