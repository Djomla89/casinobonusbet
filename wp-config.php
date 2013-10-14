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
define('DB_NAME', 'sanmarko_casino');

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
define('AUTH_KEY',         'Gr+wFXtC:,%{]160J+)K}&<-q(<)| #,b9)+Ui`!MB3ksooYh%M_#HlS+|`R=AnT');
define('SECURE_AUTH_KEY',  '(qLEFdM$q}Sdl!N*Nm<7pL7)aXd/0++2)x|Z#((p! |[d|+.E4[JlChKGzYY_-P0');
define('LOGGED_IN_KEY',    'k9fToYN}*X9%cFZ9^!b@j!>-1Z_,)4|gK,D=LV7nXgd%BOfT=[i5fg_mE,U#c2-N');
define('NONCE_KEY',        '>DjUQ4kgSu@@83#,5&d eRFLQ;C3&0y)ifs):Q^+Oxfs6,)Iz7j-QTEjl%%]MQ+`');
define('AUTH_SALT',        'I)v*( )!/hHaHC8#QL^}va $tcQv`~9[Yb?{3{{$/D#Z5wh]Oy.!-=FVnLCqcq_V');
define('SECURE_AUTH_SALT', '9JY~WO9}Jf5vka(0U`*O,pPcIwMIzx.MQmcF%S;SFUA/ec4ai?vL4J1[E =uP.Wm');
define('LOGGED_IN_SALT',   '?LA)I8WwDjn_3>04?kEg(q}<)<#Z rA=ubExF{a$MK3A1/k,v4]S{7QF3dmAN+As');
define('NONCE_SALT',       'i-w6p>d`sc^L_^$XTj_u!o2~87jxGnR,0?JI[6U1FYf])M_)}$3H6ai#F:~#=;g+');

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
