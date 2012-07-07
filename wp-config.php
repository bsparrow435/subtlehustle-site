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
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}++sP+~]<*[rRm:+k8`]}tUmM!*9b6LIt&-QDU[4.O7{^9~>|zz?I{fh7p6RCPgj');
define('SECURE_AUTH_KEY',  'Z]# Y&lW}#.}KJg8R$pl[V+?EMW{(A%Wr6sA;3Yq0;3_+@^sW<av@Jp0O.tJkSFM');
define('LOGGED_IN_KEY',    'yqX}6y:?S<~F/o-.Z-@|ERBtfRb# !|/jGlE 5U+Wef=80,[8|H}JL0b~Ajf!Sf!');
define('NONCE_KEY',        'P(B*+&#|ZGVnJFa/|vrKB[<JOQ*+C>K5)(r|gWDEIb.d5Cz@}s4$pB&GDL_v2~ZP');
define('AUTH_SALT',        'aic0%9(AYh/FvNOh^KaLBgCnS? t#Q4|_.S7]?Q?8{~bTe9GSV;5{ [e1`BGY3kL');
define('SECURE_AUTH_SALT', '(),|egL]V,g>pDz+4b$^._OgHT+1Z-; |xK:-@`/+JH2|`BE#._2nDw<Oh}--ky0');
define('LOGGED_IN_SALT',   'IK+AQkr@O_KfxB{n@-$%6dk0b]H^YjC}mzeH)N$kFKG0yMIV,-SE%|#1urF!_@Lj');
define('NONCE_SALT',       'w[ +-4-yVrzKweuRV[9O />eXSbz+,q)u$J~ZY6H,VT+TjwK$SpM{s9W0L8CLb{|');

/**#@-*/

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );	

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
