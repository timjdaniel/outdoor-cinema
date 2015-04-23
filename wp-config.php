<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'outdoor_cinema');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');



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
define('AUTH_KEY',         '.aN_c*:<bpO$P{VY%VWU#`k!eF|0]-.#/:PG|7Z9h3aOI-x9xJfJO:Aw~p~T7sJF');
define('SECURE_AUTH_KEY',  '?C84aCWXe=fxc382gc-L0E3R~NHRgjJbH;5(TGxF+J-#]tT.CjuYx4%[+^`?o1hx');
define('LOGGED_IN_KEY',    '8QGUId*% xNzjpv7m9~c^#@**GMbp6?O)~RuCXE.%3DRL@Ei=vC$<2gCLXyRW;-D');
define('NONCE_KEY',        'F-Fu-H`jH:%W0T]uwPtU?Co.Mp];21w@&PR$4V-|Pgi<N8SKLVR%</3X|hp@~.~R');
define('AUTH_SALT',        '5Q?)hjq!#D^V6&c`hTo5fc&P9DXjKA<qmuJ0iEKT^o?Ywe+$y?_:Dfh]dQuY-p@.');
define('SECURE_AUTH_SALT', ';]A}s?iW+C2/u7{[^SEXN?+2[A;C2yHi&q)Z6rHMlbE=]Qy-<`VJ9@Qe9ha;)5~6');
define('LOGGED_IN_SALT',   'qS 25b|0toK4uLpL!0-w8,yd4K7A{VPXc:*xZ9Q[thidny.IX@:LdPntj9GjJ|vN');
define('NONCE_SALT',       'Y XF%MWW-#0&&2+?,pjapJs&u!9ZW;37Ax,--^yR5cF~Erd]2<x6nFx`Iu:ZHna]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
