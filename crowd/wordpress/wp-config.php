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
define('DB_NAME', 'crowdmap');

/** MySQL database username */
define('DB_USER', 'techwill_blio');

/** MySQL database password */
define('DB_PASSWORD', '2612621');

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
define('AUTH_KEY',         'oIU+2(NIWB$-^eCkz#G+{D+Jr|WcH36%U$ek=Wc?Z49/ZPt,U^nQUE_. @/mC{)M');
define('SECURE_AUTH_KEY',  '@KSu}PBj3nWJwXYJy;@Y*{!g-ji6$Myu$r4rAYD*zBxKR1xsBJfn!:^>hYyY_t|-');
define('LOGGED_IN_KEY',    'n-LzBzpp38-]C?2~%.SHL]7cfKJ;(4<Efqehu`4,V.G??Abp^F*1:HmbzLsEF|/@');
define('NONCE_KEY',        'vDbIEH]t0KM~E*c[xHH}Ngg]m^o.^b2C#Foxe_;I8C&r/#|@G$=YIyXzN.G,7#Bk');
define('AUTH_SALT',        ';8~|/DB/]q8,28hmsX.GNFfHG@O[}vH7*Y>Gq%W-~XD3#uRCkRQ0xwHKg`ew3T[}');
define('SECURE_AUTH_SALT', '6f=ldkP1U{KLL>,|jK0MS|oVgMkySCA<{RhKSGx|[h;(G6.Xh|fkmbk*EtzS|6?L');
define('LOGGED_IN_SALT',   'EG{aX-*/,p!MS>74U!rc;0bwRNYY)3v]:M?7`?Y;4jds</4#.9Mh4{{4aF|_p-~H');
define('NONCE_SALT',       'ff($:sp(kB!u>|.{x-/}Q2mZ@|7zQFI*4Yw0SQN>[HGD+7JF?}y wCL[7||6icm]');

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
