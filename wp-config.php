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
define('DB_NAME', 'sitessee_li_cars');

/** MySQL database username */
define('DB_USER', 'sitessee_chamara');

/** MySQL database password */
define('DB_PASSWORD', 'H64Z0s2~TApZ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '^ku(GK_~qVYX}j3b{_+],:^]1euNj~`4gQ-jC%}e4co9OL)j=uZjnC3t(/3|t9Ds');
define('SECURE_AUTH_KEY',  ']YHR&gdFhW/EF*Q/njHGY.>>1v;T0f[?s@E3^:hLgx%d7V9I7_wl}UN{[($/2%av');
define('LOGGED_IN_KEY',    'GRdRWyYT7xhzT~~mG,SN^K=9k~Q@+=;3aKv@vM50OL?Tb5A)RLj#8i6!taF]opic');
define('NONCE_KEY',        'cm^HrHktb<:W00zH[FE|XMF$K.1et#(c#.<;FN=NQ&)1#SMW4^X/tv2taWoZm*M;');
define('AUTH_SALT',        'Gn@(vo7w`mNq7wd(h%m`WCV!.]h|(O6M]E2wPEemMG`Y<.hHCtws6!,Y_fT*uYkP');
define('SECURE_AUTH_SALT', '^`tu$(mFqMKi]_E=Zh|9Z%D H(hKHXzn`Rz{6+i#j!H(1}7{(Stw),YM,x^K%%4v');
define('LOGGED_IN_SALT',   'i`{?JB@BA;hp*+9cu,)i %GyjeYA2EI0:%Q`;>5-cnLaPlk!DIZ!OseZ0YBc$AFL');
define('NONCE_SALT',       ':Z,uqS(Jg[}.nVqzn6>q26eT*X1suKaEo7CUZI+w_M}Yg?=[HDq#)CY$MN(=]qw=');

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
