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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'asd');

/** MySQL database username */
define('DB_USER', 'asd');

/** MySQL database password */
define('DB_PASSWORD', 'sd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_hvn{ mL5eG0?}3MUhJkp  MlD0Pn9sb+QNe/c4f+N+}c]gp4,;;.@X_#*nc4Wb*');
define('SECURE_AUTH_KEY',  '^)+G}HpoW;{wZTe6T[IYA0vPJ6-w8oxgafp>~L7d`RxmQ:22:T^Xz+&(1? _FJj5');
define('LOGGED_IN_KEY',    'dJpE=i@-/5o`k|:8N2zDkaYs6b+:j@Q~4|)DFiwb`b!Fv=g)Lir8Q^EM[L/(0V!}');
define('NONCE_KEY',        '*vu8Ed0R_H`[FVt0beA[rkBX*2Q}G/{x0i_Q0wBi8zH`M6UEb]x#_^?,t.:RrB,G');
define('AUTH_SALT',        'pGxVmH(9W,C)E#Y(,W|4B>+oLnIqt@#,UJ@L`QWpWvXKK`[IXgQ;<9SXOHF1Z;zc');
define('SECURE_AUTH_SALT', 'x3eaifv7Np~h^HG-Zz8P[v:&R!E+:FKa}Kc7J1Q8|F0/^emS&&c0TRZ??q<3_P8o');
define('LOGGED_IN_SALT',   'w/)&i]iO(>|azS#Z.&/BJB5I3MN7krk@hQ{+>&0R@RG!vwY?+(a|kyb`D03cj^bG');
define('NONCE_SALT',       'Thd09B&`B]`ITM!^<u-{(2Kyc~}]U9:zwRM|i#UvVq{IJ@bR&)<Cj /0Q(L1Ugc3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
