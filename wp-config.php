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
define('DB_NAME', 'secretlyShameless_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '2d?e>oy:6,I1');

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
define('AUTH_KEY',         '(8WkwoK]-mG3vyW5/ms[|1$v(bfB2YNV1r8:[_>yDYS_f=obEJRLe)9M6,_] E1S');
define('SECURE_AUTH_KEY',  '[:Pd!&Mjuu5_ZG*Vas#/{z2J>h.lw}f|-L1tDSh$`)`kgCTRwF-r_$tBYqjAi]Y ');
define('LOGGED_IN_KEY',    '$B)c(K.Wsm9r&|6;jM=1`]wpR6UDmgMju[yIxx$L{M/-@2KIU;cYZ,!-R&H96XD>');
define('NONCE_KEY',        '^K`|]|4l%b)0WD+7P?V@sq%QTS3lRoIZ+XJ|c,n:v;KoGSwXgHau0P[v@&t$:m0m');
define('AUTH_SALT',        ' D^:eGFI?#J({fU_C+XD3i)RW6HIeQc[ZM)?|;%S4bF_[=n=jY8C]G&=Ic)YA9G}');
define('SECURE_AUTH_SALT', 'VAa=gNc!7:t&=_K+Qrb0L7JlQo]r7v5AN@_ZS?cSB]|vZ*Dv}-}Ey&h/=CuWA4tV');
define('LOGGED_IN_SALT',   '{N/2ww<L5Wj.?H|p!MT2HXn<c:5HB*G~9jgT_J9H-hL9/-V>G/d|7n0@88(Z2$[ ');
define('NONCE_SALT',       '_)?~crJsKr?+CT3/27`^t(;@|QVT.I.{|Gsn^AB_75jL|~!Q*Et=Z+-K2;JmQi9-');

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
