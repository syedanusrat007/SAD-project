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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C:*el,Ey1^iEH{KMS@iCX=gQVV@gb:u2}I=v#h#xk{GD2>!o,d[lM#0=~4`5Ws&m');
define('SECURE_AUTH_KEY',  ';mwqa_iYnEpj}CS:w2IvnFi@&Q*_ctOGQ*F8v~8(.xH6NxkDi)n7+D3c*,BN#-:*');
define('LOGGED_IN_KEY',    'l8:`9<+T8$rCxN_?%>4.>RF.8T_wn~@ef9$xOX4Mlv!YS<{s;#3RYRufs9`.=@!y');
define('NONCE_KEY',        'oR)p^2#j~C(ZAN&myZ?G!khBU1(EsehEsr@A+NNEkBfZJG:JNS)D4L?F*9#}hY#M');
define('AUTH_SALT',        'pI(A{VN[ASCojrb;fsDxiqa3ad0Di7_sSf|t@ImV{^,*E2`TKjFh;^-U<Sf8f3Qs');
define('SECURE_AUTH_SALT', '(Y*fW8B=*S;`B{I(3u:$!^unAUY[w.5u 5FaS8I6DZ&*{VYb1Q;|XM9|x/_2C|D&');
define('LOGGED_IN_SALT',   'q/QTbA,$HvYI.k*7z`(A,5k?{14tY1}Tmmkzo|RDX[w.D?ihRkstV|o^j2j/dSL ');
define('NONCE_SALT',       ')-teB/p.[ah6pPe%WS7x}j%(&k3u|9hh@heRe6*EZ<s*cF{tliec;QpzH~{avN;Q');

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
