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
define('DB_NAME', 'mightymangos_com_1');

/** MySQL database username */
define('DB_USER', 'mightymangoscom1');

/** MySQL database password */
define('DB_PASSWORD', 'DS7g6kGD');

/** MySQL hostname */
define('DB_HOST', 'mysql.mightymangos.com');

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
define('AUTH_KEY',         'v|6)w2^JT&emZqp#8O?CN&hidvi+ed_AJeJA1vmwgE)#$21Jj$XsmrK(9&FF1o^r');
define('SECURE_AUTH_KEY',  ';b#*U"FzxOOK^?vi^Tmr$lmU3~jxE8&RZP`R5IJ~9WurRc8@~:~h2v3zgSdK~1sI');
define('LOGGED_IN_KEY',    '@sz%Mn^pw0X#ZGAgg(PKJ:kBzNFiy1YsA3iAg7j47NEHyq|NF$`3!Lib)7IFauYM');
define('NONCE_KEY',        'g(lRv9QhXCOXp!r"4J7W59jj~9%7vVX)E^r#oJL()XPtq1HET5fUe;)1iWM/6nH4');
define('AUTH_SALT',        'MaWY?%Z*+0V2|$wDQ8ff?nIhpLJ*hllofP?/T:M)_Uc4nVS%WH"3p:Fk8a"d$96@');
define('SECURE_AUTH_SALT', 'jeIwL#j$Gz1PDtX+t|7nctRJKKRbcw3uPC?q$q5tgZ_GqfXDIy!WB1TSfFB^VO!F');
define('LOGGED_IN_SALT',   'x7iIg8y5S7Vu|hsl%Oa4Z2Vvon6^uR(9+7D/T~LG?vK`FV5Pkm@$UK7cUPe~Radu');
define('NONCE_SALT',       'b1dENqV0t~WUN+FfTxuL%z~9r:dWJcNG;O(j&V+)k(sumfeUeum8rbMnZ_R_lqMv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_updkj7_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

