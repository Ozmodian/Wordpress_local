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
define('DB_NAME', 'wordpress-5');

/** MySQL database username */
define('DB_USER', 'awhittle');

/** MySQL database password */
define('DB_PASSWORD', '12495555');

/** MySQL hostname */
define('DB_HOST', 'aa153uxakemfp3l.c4xp3evmvxms.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'g{Kfo+{AKq_F0~6}?tA7*xz{qqm)k4Cc*@ssZZib)4-q@,D$cXg;@nZad{Ai98TV');
define('SECURE_AUTH_KEY',  '0Dm)zT$9TH*rjtj0)QyFKy60NAYY6rip[WG*J)6Jl#Q(hTMuUs3z{I)(b-/qeR#L');
define('LOGGED_IN_KEY',    'Km&b&39kTBNAhF+.`9Yg1}yhXV@/X9D0xbK-)MFnF8[6|}I:Pi}v )+UDrc~/sMh');
define('NONCE_KEY',        'F*$Dduy0L~KsV]{&32n2y8}ttBA}^>1l<BZHUVD7UC$q%uL&G$C8_[!!)vxn$6D^');
define('AUTH_SALT',        'U~Tj!W_3Vtg7;i%G-H5E:YV$WGrEwvt-Q-~|eN;Z&&*Y]H_f5UWge~_kdU[^nCeS');
define('SECURE_AUTH_SALT', '%dltB13Jc<D$EV(brT7w<x:GI]v>wXBk}k{34&Y7w/H$8/88l&tuej*Ky(c!$GS2');
define('LOGGED_IN_SALT',   'D`E/49GR^/Sqbq+U](]es@>& t7WDbKY1~3mr7h#Y|Pn(^>+@fJ=vctVyOzGYDq9');
define('NONCE_SALT',       'JrUU`4tg+AqW8Y&cpBc`c?`q>/znV}SH#|H5$d^EYa<No*H,6(*Dz$I}1.MXVYg}');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
