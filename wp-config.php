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
define('DB_NAME', 'percival_percival');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'InterAKT@Emi');

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
define('AUTH_KEY',         'X{H4RwLhlh-(,iO269RGV W_!q9*F<nLUi/q/S7,XiRO8}ZkKn q>)j|CnF,I`/`');
define('SECURE_AUTH_KEY',  '1F>*pDL&J6RAdw2:}kdhd<!lq$}^@Cmh]x=.k5jCwoMBhDzBbfgWl-LLzJC{szy%');
define('LOGGED_IN_KEY',    'o?g6;3A$3]gpVxx0fvLe%*%Y>n(m`Hb/{OSEB**.uw4ikto.zU5Aom2S>hz0ILop');
define('NONCE_KEY',        '?!W#SGBAGhigr.P<*{qwg*DHu*qB*rQM1QM3|Y_[]M>(nA2C=~D[*CGh$iu#kk+:');
define('AUTH_SALT',        'bWJfS{7J6O2=8px}*Yvq,.O$pBhK`NR%o+:GY4%PPq-;;IyYr/Vhhelm.6,NSlBY');
define('SECURE_AUTH_SALT', '/<%>8<9oXx>~h6{8e)NeaQqUObcr3H8#cc9[ d}`IQq_zh{0D+K#MWv4VPO8|LdC');
define('LOGGED_IN_SALT',   '>,S;_LzCxmw&fi|TruPODRn [o6C|1G &u9jh/xL,p-KtO{;!9SZORShv.M?Y#|F');
define('NONCE_SALT',       '`iI>m D /QAR5)E~l5$b 9oOXN(zrSfu:[&D|_97Oi1fv#tLzHx}_9to^7XjeDu(');

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
