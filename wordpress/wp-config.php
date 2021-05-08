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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_ALLOW_MULTISITE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'An#Z7OmIkum[sUN lMum)f0&WCX8Zm!?SeRzHr0MzKe;u:EFU$sO/,8>jwQGZw)U');
define('SECURE_AUTH_KEY',  'bYje&cXapl28vl0#gG[(J~Ia~OD=*48,)C1To[[&S=c]BFeIl{qjVp]FRzyR|Fi<');
define('LOGGED_IN_KEY',    '6)=HUVE8+($^1Jn<K.[#/E_uQ3+Rz {b2:tIt4o=`&Nk~ApH`WTJMqn&^oS4|ii]');
define('NONCE_KEY',        'FA`a>3C7j~2Z4qZ>riCp!<C*EKbsT:U,#Qcy;?m;f9]c2c-u7Q6Gyat9h9o_3NjZ');
define('AUTH_SALT',        '0;<}9 |sE8v>DGGxbG_2=3~Tc1u6{C7On%|FVyP]l/P,NW.}}&h7*/$bw<gKPwCv');
define('SECURE_AUTH_SALT', 'Ch]^TKi(O}Q#}LcD7|1UoaE}V4C~14e+j):<_e%rxI7IeRq#.D])^w?KWEx#|1nI');
define('LOGGED_IN_SALT',   '()LG;8G!]Fj`P_Re-JFpU]^iaFmX{>5|Kib:.k8Q_Kk-i&)**au%cTOwMu9mA@v{');
define('NONCE_SALT',       ']<^oxq;q>n-L-es||>TqF{Lw9aSK?-_2ntF|:`30|:$=]+%X8@]}KxcD<SA )_Ry');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
