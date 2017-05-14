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

//Cam sua file trong admin
define('DISALLOW_FILE_EDIT',true);

//cam cai themes hoac plugin
// define('DISALLOW_FILE_MODS',true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nhomkinh');

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
define('AUTH_KEY',         '_xOBmV]-rR^3tw:>i8qOey{*$[s8%Vb)GU{dC^]0~<!||d*9])%3=(dTUjN@?]~R');
define('SECURE_AUTH_KEY',  'b3|f/,M}4$7JXn(UfvKaJ?<fTtwFwu9fJJZdHvu,{<%0ox4GE`|hk^ARRo*fBv3}');
define('LOGGED_IN_KEY',    '|Q4rL9F9rUweYW5m0G#.J*cPK<(GiMx1nwjr~(To;3,Q3U:==@gEzNujNryg!qMz');
define('NONCE_KEY',        '[Yr]H NF55znGM|:+S~+MLhKux|a3Os=k]~LXnBu4fz`@zJq! p:?,dsD+s@<#X8');
define('AUTH_SALT',        '.oqAp:2]uSG((aZ>Abr,nc#nF(e@Hna-}fO|qrX; 6t?Ph-zDpo.b(0fr>Ow;*p;');
define('SECURE_AUTH_SALT', '<Ov&1p;<`8OCphYbo}K9Vpuza.iI2l YG?c0GvbZo^+2$^Bk~]a$hwzj|,~2&O5t');
define('LOGGED_IN_SALT',   '|W7jy?bM*>gPCh(7Sj+nu|]dV`b`3=0|;BK.e~-b9z%u]H&hBqcP%PC=&-Um)cs/');
define('NONCE_SALT',       'a<|~`)+AhiRg3B=0Stc).j+J;S1.-de$V@lX uphh&eNFE4sKaXy=X!hBD#m/-5C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nk_';

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
