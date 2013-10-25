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
define('DB_NAME', 'WP_waindo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '6d~0)a9Ul<}|`_T9lh6LBC! RS}n$]Vj3EcC4Pyzt)TU9M&HuCrl6C[(Iu&M1R[D');
define('SECURE_AUTH_KEY',  ']XL0d#;2R|V PWbn=)aYbt6[hVDf/7T!t9l9ZbeR<_+Y*&X(8Y93E~gXvT)<hH&[');
define('LOGGED_IN_KEY',    '68[1wlp,k)_Xb0W^IjvvI!9/sA~VA,F Q&.{g]i$BG5AqOoBj(z{x#Z*z!M&{MsV');
define('NONCE_KEY',        '80,/H!S_]yZ`,W[lI#kLbz6paQU3Cp:&Q2PZm+ E87?B&n aDu$H!6e&6!e0Tm33');
define('AUTH_SALT',        '>lg<OAsM07xP,r_r?nw?_M8grfcL=Z,&gE,f~cjo| QDj}r*$,dVL;jE+$.E8wM9');
define('SECURE_AUTH_SALT', '~EP/C&prm3Xz$C$4UblW]+u%TQ71u.IDq@k?DjkUf>:3EW~UQPKCa xFgG8?Atgc');
define('LOGGED_IN_SALT',   'D:`<JhK6Hc_( disPtVg*41aKLE2DD{!BS39 /LDb~R`RQ&`[nC0]?9(LMdbu#Jb');
define('NONCE_SALT',       'gPk1V}v.(!PRp#r?(Z8sa(ByT_oRbt.6KFFXb5*](pjMpT7hfO/_xxN9q9LtuL=w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2';

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
