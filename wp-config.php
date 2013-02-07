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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'phpmyadmin');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y 2vAr*)09`@@HYa*PUS_J^Sw?)g*{r/&:M5GP2RT.pC%i5R/}N&:#oqj*%am}fX');
define('SECURE_AUTH_KEY',  ';gzyp2UpOPQH~o0i-?-6GOa5.>RrZ91?0nq|- cYYM>38DS9gDU-r9;_kgl#/ZHt');
define('LOGGED_IN_KEY',    'g@Y{rFO7S3`a&+&)Edh;sDFaC`H-=fQqS9YQB/.0#|5NN,D!ZL|D=gLkyl*}fnG ');
define('NONCE_KEY',        'CpzVZsQxP~ray1QM;AUX%T&#eE%h+-E?z;UJ(5oW16-)@enH.J6lTbor8e]+t*Ro');
define('AUTH_SALT',        'PH-4N*R#+p#J5q)V2qh|h`6/!mnjG#IE||ng)H`:yN?p*d1]|tO:ObQp.^UXj0-w');
define('SECURE_AUTH_SALT', 'b{cS/^,oA<Z*^H^|ae(c%6b$yo,JE`y<Sz)bu+Nd$Ab~TZ2r>}uSpxj<}X;U^+r{');
define('LOGGED_IN_SALT',   '~6pA>~+PO`LFRInW_:8YRCulIp-|b&Vl[z.!Ob|*qDeS+w+5eLIAey/G|3YA1Q-N');
define('NONCE_SALT',       '13LEOg&|)NiqOa1d@Oyk=G} Vw:EHd1(ug`O;^^O#sETs.*/WHUNyxFoU||Yo|o7');

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
