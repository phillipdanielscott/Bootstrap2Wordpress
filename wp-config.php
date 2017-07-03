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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'jOQKNgLKHXJ3U71j');

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
 define('AUTH_KEY',         'DRJ}nZ#zz8~ B)z!RM?mO|WdxY?3z+ cLkdJtkWxDZoWkaC6EP*ta$:UHL`<GU- ');
 define('SECURE_AUTH_KEY',  'g}zR@MO:+aE{(C~9N=MNx-Id5#7=5.O|3,z}G93Q?K@3jZ0izrudweEb?6MUaiTd');
 define('LOGGED_IN_KEY',    '+-H*d[K<_KvJ_bq=+z}d4[ACHz5=!}_7~.vtMf?,H:LY&4<*Ko4`yoW*=>/nRVeS');
 define('NONCE_KEY',        'M{$b0K^wcf~Xky2A/aj>_nVk!DOY8x?sOw+StpyZdGzk.Xmgtcda=3O1/NxtWOYp');
 define('AUTH_SALT',        '}^_n}kZG`|eG+drmmQpw&s+l(DTdk[HU->`h+aQ]D IV*uo.W^#5?Zam/)0_0[6j');
 define('SECURE_AUTH_SALT', '`$yx&/DN0n&#| L<21/MYL$$.PW0HpvcN|,,eTbR2R+~Tt}_I.?3OsaGw]5+u4}-');
 define('LOGGED_IN_SALT',   'Vj!%z:vOuj?_0jJX[vYO_=|s[!178:8DnV+28bgd|h~:4,Wd{a,n{b8r;GIJOla|');
 define('NONCE_SALT',       '`-E%r(feI=_<QE~w|1G?BsVzYRaW.LPP8Fe1m)ZovA2tpUZ*K_e|_*`Eyp&{0$8u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs';

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
