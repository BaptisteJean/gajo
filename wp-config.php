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
define('DB_NAME', 'gajo');

/** MySQL database username */
define('DB_USER', 'gajo');

/** MySQL database password */
define('DB_PASSWORD', 'gajo@2017');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{-9{7@(Bj-*>WrMx>7Yk+0@F6,P30~P`Lz7XxRMc`)4o6T3<cu!Fs/2MCI9/A(j[');
define('SECURE_AUTH_KEY',  'm|MHHT8$K[wv-lX?wk/<u67q>Q^~z`oEz9?2#<BhUrRYG}xm=8X(4([DLt ]Sq-,');
define('LOGGED_IN_KEY',    '~6#5eOzQ5lPW>!,QWC*Ck1!)!Aj}0rS^xn13H]P4<2T@uowW.?.):^@:%(/TG vG');
define('NONCE_KEY',        ':if(p%1#_.:;qtY0/U$p^eXn>wv&|ftpm*1l5]u<rI?/-&=&hddHFRAoH-(qF,<E');
define('AUTH_SALT',        'dQaL1U=m5.D&z$^ox)SFo-+]%8.r[h)GzXb/K$i/zWw5mE=2MQ|+{NN-s1]4tVJO');
define('SECURE_AUTH_SALT', '2j@g:w&* BaVJ[m_11w[u->Mb8eZ|D(JOv][vr&rm)>Nq_88}@G-{OmiR^99Qy6%');
define('LOGGED_IN_SALT',   '}HpK6kW-43xb;W*xW-rhFhk_F(tZh({(bS4bj`%NH$k^|[;D j=%ecM(_nYz00K%');
define('NONCE_SALT',       'oR`Mm!0eJ95^=D]A37^ah=fE,_$CK.^|3+)@F`=VZsgRmg^cP#.xV:pz%TcDBJ/n');

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
