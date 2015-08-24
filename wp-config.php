<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'andie_wordpress');


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
define('AUTH_KEY',         'XQWGW<[JgvQ;LVe RCN&=[zRM_L~8gfPx{bWyR?mpal>w+%DvN+8TB/Osl{RZJjJ');

define('SECURE_AUTH_KEY',  'if|kvPad{N(AvQf,m,In`$6%o;|5,aM698-+|UMjQcPDX{ww:)NaJGKQZ*^Yi.Ny');

define('LOGGED_IN_KEY',    'om~e6-h%D3u;Zc.b5(Of~},Yyz@Y|_11;my==%17^gU)6Gd, 2k|tZ6wW->4,K4_');

define('NONCE_KEY',        'y~wqNHWlh+)@_mL+RdeSM9n|PT*yG=8h=tPg]|TO`Z~E$BoGumG7++5tZzJoD m+');

define('AUTH_SALT',        'ZO[`QE:oYrM7Tf;^O+PU_qm-:?xxN-,;[{J};~]w6}m?}+|?=I>2|pO Oc=[SXU-');

define('SECURE_AUTH_SALT', 'g&:9@4^/>~*9]MKg[xH+{] O*5vO[J2^]CnELfN](HKqf&aUT04u=e6ztTlh/~;S');

define('LOGGED_IN_SALT',   'Hx|[x,H#(nAV25 @nc^lO}q<${6ph:DvD,;R0F|5l!#Xsa#tq-1F)M9|tx9]*p:#');

define('NONCE_SALT',       'p~H}Y]A-(lg|WF)UT?CY4G|-cdpz75p??eKI)7(a|Hw{0sUVW>6^u|7X@s)UK=Rh');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
