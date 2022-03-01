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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naked-art.me' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'T!Ac|_~e[Y4V!)Rz$}aVcLc)^MBX3uO31Z.XUCo}=b=a I|ANwVZwJWd#ylb|hW<' );
define( 'SECURE_AUTH_KEY',  'F9Pu(W#]j%;gMokJe-K.81=H~UWIIARM~H8|M?oJl+ZGrh-v$Fa(q]B*G|b~f^n*' );
define( 'LOGGED_IN_KEY',    ',IyJU?6#:dURBs_S%=T1({%e2V^1#WWd]%~|U3aI~2;;$>0Og2Eor4eR7KO+|]f?' );
define( 'NONCE_KEY',        'vo{[ &uguV(X9RhapZT;aIIHk5 EK0N* 9xO3H$V?`yW- u(43ZEBllB~y/Z?h{q' );
define( 'AUTH_SALT',        'T=<B*{2w-wWU|7jx[(O6h0exUw<fOPJ;X[cw%Wl2]<UiG&V%{3#|N.Yy0q@3f2s~' );
define( 'SECURE_AUTH_SALT', 'Pgdn2<$@!eI8kOBHt j-l~.h+Ql6GqC0E0};KjgO5>9rMs7660EmU{gU@KBFJ!S$' );
define( 'LOGGED_IN_SALT',   'PpN@3oJ7vbaZq/[.orD.:pieiGr_^dAY3426+p>H 1=kp;zS,#;Q)+B{T!db]xOX' );
define( 'NONCE_SALT',       'KZ6GO~:iZGj;&rV]>zIz=GN]z3iSTr]L<( vQgb,4}[AQQBZ3G52*aQQ^pCVKsGa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_naked_art_me_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
