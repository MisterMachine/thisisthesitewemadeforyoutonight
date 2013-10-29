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
define('DB_NAME', 'madetonight');

/** MySQL database username */
define('DB_USER', 'mtweb');

/** MySQL database password */
define('DB_PASSWORD', 'sOv5gRTepnL2UP');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Ub8s+!x;y{a+z8!kN~1=[2$:bzc!58Bx2<i|ji@?=MBMpb.p~$LDB|eN.-]Gg+?$');
define('SECURE_AUTH_KEY',  'pDAq>S^66f:b,T?-14L]dGMC_=!c qbes^[%.V|;?c|oD=N6Gu-K7+#F.%%FO:VD');
define('LOGGED_IN_KEY',    'G6r{8q&!x5EIL[H %$Ru6P@7)2S:(KBOK4+p#@u25OX4[BM}+FcVJn_;T2f)]}LF');
define('NONCE_KEY',        '0B9[8w$C[jLa!Vg8cKXkD@Kcrb!XI@*>>^_+UmQ]%[$t2(%X xCoA@JMIfi/Zw2>');
define('AUTH_SALT',        '&+fGin~cdc,--5v)dEzd|,&X-F[_g9bt*6:>tSp:hdx%M21N$!2w|W6gam4+0__R');
define('SECURE_AUTH_SALT', 'xlBSeM mWjlVa&Pq?nu28Pf^e*Ed;RqPkY1k?`E[F~x~ws38+w_A)QXdh+~BcaCG');
define('LOGGED_IN_SALT',   'wL&FcD>KQU:uu?8-N-{tDdT;9IZq3qP=q,`E-5z(<?g8wAQA@DT(e@Ck=!4-M~>R');
define('NONCE_SALT',       'F6lXf!.bkPxLq+OOKk;uT})X-gER<Bmg3798z0~?f]YkSZBm!0Pb$qg)2>#ba87l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmt_';

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
