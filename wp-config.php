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
define('DB_NAME', 'kmet');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'j_b9}?D,cZ?G-HL~NCg8?Jds|mpksV}6CBX4B1dkp6BY^qfL`9vun9!2C9jW0.Ga');
define('SECURE_AUTH_KEY',  '0&y_ Z`*2w`=94mjan#z+goDg+yvRNCa|}S[)jk?>*n6=k0-:_Bxn{<>G0KR-@lc');
define('LOGGED_IN_KEY',    '.KWZ}`D)+oS]hCHF8oxgqf3vJ~2e=Q zwf%65+dm/K2z 0ZXQ-eg~0XT_.S8Oura');
define('NONCE_KEY',        'ZomH:St}aP@NRvb1$]M+^p{Ddo,>/Zw$q}-HH{<JOa(_[H0TSLL8(sTO7p+@xKv9');
define('AUTH_SALT',        'V(JX3|Fc[B2W/lXW-.a{O!Mtj7HwKuKpKV0)WLV#!A<<EQ6~zapD)LZ60+7bS;_@');
define('SECURE_AUTH_SALT', '_K2^lanXy+)B36;sA-Prfu:=h0;sOY@N&h;(`G7-jJYp+;R$V%h8lBQ(tZOnd[_0');
define('LOGGED_IN_SALT',   'J/#QUB.FwaI.<_}hF`k83@M]-ro ^rB+r_6e+yicdK+?w`41|HI_ZBA:>CP?|Z|<');
define('NONCE_SALT',       'c,SzX>uq@W;|E1Lt~(Kz@%9;3IHB*&*#$!HZ+FZb}-K/CKZ]BMiO F-#H.QXp=Y:');

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
