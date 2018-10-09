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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'TMk0cYP@R]w@b.5ykmX^ RUEqVX{-Q{ j&Z^MVWmb&^ )grA/Z)uCC6W`nG-c0gl');
define('SECURE_AUTH_KEY',  'g2Rr+X_Mj@8_{)&m|5>}-qMF<Kusgbb ?FHxWZDFJZ<Ow6_I$qUtpMOe;fsQgB(g');
define('LOGGED_IN_KEY',    'xI58#e!O0/%c`VOpGyfmmG|V|_+z3eIqSo, ,qLnNYiMlh<o/c>b)NMQD6>H|[~s');
define('NONCE_KEY',        'ii h%-FAvJk;L_wcu{OZ=c/gPO>{|@C#&HLCcfd.7/3SG*2u#.(Ks&#`xI{6$xG}');
define('AUTH_SALT',        'US/epk8694frHaAB7N*h;nxJc;j]nG0)2^N=WOfC79nn}TE6bRsoRE9rY>GR%M]9');
define('SECURE_AUTH_SALT', ',T;4d(BiS,:Iy{f@l =`:.x$l ;/TE0zFFrZ+(0=Ek`^<QAApU#5Z1)HWo~k,G;Q');
define('LOGGED_IN_SALT',   'gf8rmZ~3-~V M%Edce]#:%T.7*]3LnvpsEe9(Lhr!`([MJ4/=(`O(jo4N-$(-{;G');
define('NONCE_SALT',       ';~Y=?/ H?ib:[UxvzL8hs{O,FnfnTKP}U2 }B?WXU##=RBhfrj@ALZY:k>23o&2/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
