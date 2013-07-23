<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mckenziepta2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?FOSG]e-u_^FBW6-*Q%il~78oL4XDh~wQ--bJt(- yf/T]CDje[+%_2{<N(>&k(5');
define('SECURE_AUTH_KEY',  ':QXJ<bhFr8gChdj7V-Hwwx)x&zmg!w;[f{:?-Rcd:}a&{aUz6lgSN}-p7EPl4Eg@');
define('LOGGED_IN_KEY',    'C~`j4bF8A:3Ss>.vQ|Hj<^J#*=.%vxBJ- B!qA3Nz5.*}OY0=)_]+QO1X=:+%JV_');
define('NONCE_KEY',        'PK_NZf}=+Z:~:i,u6Na|O%l+vb~Qy3b2, P;edoZJ],%`cEJMRxPLrlJ,T?g{AC%');
define('AUTH_SALT',        '=lsFBvu7759[n$(jzR}>$M~|$78&S@n.>:q3:jNdOrx:eFJ[B1kf7=0IbXkH>oqC');
define('SECURE_AUTH_SALT', 'HlB&8&)OjR-Z$3eC El/vB&n$JSz</xSRqPB<H!K#(N)zWdIlv?d>a]c#7ka|tB1');
define('LOGGED_IN_SALT',   'C$#@7Vfk{3E5!.5GN?$G~JJ9/ !BPyHO.ky3]d3J[cuhX5@=6L^GT@GFuY@ULWZp');
define('NONCE_SALT',       'GM8hDqCdz-?Ca}9?b96XIQ-dxy,|1`s#ORD%x+6Nf{b}oeBgw);0OsG)nW:hP*Un');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
