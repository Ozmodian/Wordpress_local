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
define('DB_NAME', 'test_3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{8p+%v-wqi9J0hvKa[o.dat<.~e,^:LC~b3fdQpdf;w<^+l3@7P}*fTfH 0Dr-el');
define('SECURE_AUTH_KEY',  's|sJuq[b)mn~RGIL#G~<T9R37bD3 ]`hSu(cJ g$%-9f2V(SI<Mw-uWqksA1S(sk');
define('LOGGED_IN_KEY',    '1!Qj|izIp#gAP5j9fIi=|Jc[fSFD4)n<<hQyDV;b*+9AdjL$=rRX)OdF~vI:OKG/');
define('NONCE_KEY',        '>]N-M2uoqS<NibeQ|dHV5#|9IUaOvG:0hJ^Xamvf}MNmW&=((7z19.w{zX{dx^gP');
define('AUTH_SALT',        'R(7&XgroY~]^a;9/`8gn:oN :%avTzf>mj_@Cn:Vx=b/-A&)mU8y5{7`AS]+5v=,');
define('SECURE_AUTH_SALT', '^]do,9Of,sOb!1:tY0F6cjJ^A5Wxw|@?,55v$e t?V%mS3zH)5Kik6AH%l$s*w#k');
define('LOGGED_IN_SALT',   'cOH|H(q#ZnnTx O-3U`uS-9O>+!1*E@|&2E ESxoL__3!:pio7/($?PJywh<0-c-');
define('NONCE_SALT',       '$x -#H/{ls6;G6xq7,]_i~,rkLWa$+}[pmFCE1$L{tM5_@AtjQ$yRx7ubZK>Z-p[');

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
