<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
// define('DB_NAME', 'database_name_here');

/** MySQL database username */
// define('DB_USER', 'username_here');

/** MySQL database password */
// define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
// define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", "heroku_9a5cae228ac7222"));
 define("DB_USER", "b607acf1869e7a");
 define("DB_PASSWORD", "71b86e52");
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
define('AUTH_KEY',         '5XOn4huF.!+)e0W3xvnZbr[3.q=wP*x!h#!)On,Owy7ipq~P28>MMMfsfME+r:]>');
define('SECURE_AUTH_KEY',  '! a-MR h>zhC?s?4`YwE;=B;a<c}xsfMfJqCc*9;]H=`Bc-@R[[,=6LfMBUM[>ev');
define('LOGGED_IN_KEY',    'jSpkF1vspWmhq${Y`(`/9(T^}! B1P@;|ypj+7}7,wz/qX+kt=9Ze|%iFaY+U]nJ');
define('NONCE_KEY',        '^u!@7KycX+V&![)dkHuNk+jXHZG6E7uPT/0zvvLi~9zuq3Q8>L]h|?7.G?l$Is$1');
define('AUTH_SALT',        'l5>?vuR,GF7y+FmA6j5y8;We>tC-+Nl|mpPfyS%+O}QvQqyqpX3NZo+T$50o1f{B');
define('SECURE_AUTH_SALT', '+ICisQHt%i/f($mHB->@:Z@8[/+I{?Y|+HVQumy}r`/UOkL8?x[4D7f08F@|zB<+');
define('LOGGED_IN_SALT',   'dwKtQv4;D,Rp!WS&k3A{$A/*wq%Zrf {XFl>)R|:YOo^UX+aN|NGhKG{S^#r0jbq');
define('NONCE_SALT',       'WSH!RAQ*+T^GM3|1,0pTNIP{!kQ{RUqAPk0wPJhA]Ik-y4N]-L?.BeS7U6Se3G4x');

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
