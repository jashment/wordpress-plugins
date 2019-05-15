<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', substr(getenv('C9_USER'), 0, 16));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

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
define('AUTH_KEY',         'BPLT/D]+a`2Q8*}n{]y%=Au1UJfx)#QY$z!Nz~H^Vlgt.nqQDUW *?J{Amo30 [|');
define('SECURE_AUTH_KEY',  'Yvs@<cj~@V8=|RkL(eY4e&K]Uhqh~I Ra`&l}z8gtQ(pp]y}z:;aM|R& SK*SLkC');
define('LOGGED_IN_KEY',    ']o3S)0e]IW%Nl>wLa[_hy&Ojd(+f?D[=pho0.K$*_1^^*kPvB/M-(LA|RotxCOo%');
define('NONCE_KEY',        'kc9wpN]y-oMURb0X0e$JCrZ@]?X$$#$j(yN=l8!t^U`7;M9-8@_nQ=+Sn8qy0Lks');
define('AUTH_SALT',        '}xZKUc$obv-+lS=6FJypGhhIux,/<alTF^SWdX%JCa%6+3&=Y)(b}ot!#%,})zjU');
define('SECURE_AUTH_SALT', 'TH)QUX5D+*]n~!;s&i!(<9P@ED:xG)ypBf+|(RD#/zl-u,~|^3_R/le-yUk*9awr');
define('LOGGED_IN_SALT',   'MN5OM7/!Nv$,<nLXxG*i0IN<NZ[S~Q?X]|59E+({]++z2PPAv%t%RN,]aHD(NK_F');
define('NONCE_SALT',       'O3q/4fOF3-S(Kk|o`-F+]SST85FoC+AW&^+iEr;z{W!jPB5ljdo@dYLUXiOUadP^');

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
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
