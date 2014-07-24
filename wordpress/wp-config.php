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

/** 
*
* YOU SHOULD BE EDITING local-config.php !!!!!
*
* DON'T SET ENVIRONMENT SPECIFC SETTINGS IN THIS FILE, THEY BELONG IN local-config.php 
*
**/

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'database_name_here');

	/** MySQL database username */
	define('DB_USER', 'username_here');

	/** MySQL database password */
	define('DB_PASSWORD', 'password_here');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '(xKMR3q:MD[Mh l;+QL28iG_;^[5#KHj?rW:h4+1Jduex|+P@z =j3uLl(|m!E5C');
define('SECURE_AUTH_KEY',  ':fZ-<Y!~ No5f[E{:xVI+-R2S&n~<aI%dl5Kj~GK_S:tZ9,;m-qw9_-80oUy_0;|');
define('LOGGED_IN_KEY',    '|V|aM.+eD?p*a/ij=80~^p/T/h-9+R+uB_j=-S<`!Jl~]XOXjx xf9:%@>8-^Du|');
define('NONCE_KEY',        'Twi(Vj5|JZtdIYW/2/yM%!obYZ!.RmP;zsKl|a*=(u7}2fK6wjX-^||]<cl4882X');
define('AUTH_SALT',        'qd5D}Xg},ESRaMlP@>m_ccB|b-vb ^V<ge!{w|$#kz*Ab.ec^Wt?1qU!,sB4=)~A');
define('SECURE_AUTH_SALT', '?>EuLP#.G3[N8CCZxN~4N lG$8ouU+Qw[~^Q4?}>[*3Y(n{[$8UA<tA{t])ElF<Y');
define('LOGGED_IN_SALT',   'a+B_n]<zCuhp,G#{[s-B>$<]_{nkc8GNuc--aDp&g;,B(vbM+^4Ikxa3H0?:FELs');
define('NONCE_SALT',       '|]!Rl])#+b|t^9sy+oYSO[etq>W-I~~4g5%FRzZ,1/T:@^hrz#r,WuE*B1%]bDx`');

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
