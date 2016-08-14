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
define('DB_NAME', 'hrishikesh_wp');

/** MySQL database username */
define('DB_USER', 'jms');

/** MySQL database password */
define('DB_PASSWORD', 'jms');


/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'KF2Y*>1<,^Uhk?ZJ3cDG?h6gm c+H4}CaH[.77N6_|rs2DLOn^{j2v_IhU$2}xm/');
define('SECURE_AUTH_KEY',  'GOvcT5lleh{ZU24ex_Jiecf2jLHF9U`O-7av{74d_+ZP(FsY[o$Djw0=$)vVF-jT');
define('LOGGED_IN_KEY',    ')m}]hDuF8il-I/+uX|[o,oU&kDm2XbV`%#1+q23H^cX{TZ<S&1P6hJ=6i<4X1 o1');
define('NONCE_KEY',        'm@Z>E<|JC:aH{o]~u3J3RfW8p?C?o:k{+e339XS5-HTxfv03|,--of|t^lbtE#/i');
define('AUTH_SALT',        '7{w#GuUO:.>+nY}!DyMYS*Rxwo`J!0= Tp@J+Ss6-GFU*,(eQ7L!M?n`Ej,J][=Q');
define('SECURE_AUTH_SALT', 'p|PehL7m.[d;gqPc?qo(y8I[<CLeHF;<~c+w2*k^[JrQKrfBkgkMKd|E42mc*Y:M');
define('LOGGED_IN_SALT',   'mlX4fF#wc@s K`@I0XK0[~:f_@W6-5/H&lQ4Zjq(c`eH8~$,Xy?9(qzI5Hfa9)tO');
define('NONCE_SALT',       '!_RYJMZUzG c6|jaKTd|?Y<+|?#-d>4b?5{7NjsAt,;t5UoxRK20<FC[3(R4t7]m');

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
