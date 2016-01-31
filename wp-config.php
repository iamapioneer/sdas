<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sdas');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'hQRjyI/*h8D9z:+KS`Tk/N:-)Y:@O~3Swy!c<=+Hj)%zf0Nd -1hi=NF/.2GS~1)');
define('SECURE_AUTH_KEY',  'T~a[8gcUU5UY-+D7xX.IEoP.[fx`Ul|sm$I6AD{0004vjm;Y=_`;%  4XEA..+$+');
define('LOGGED_IN_KEY',    'tH=Pb>7hLs#$&aY<ty]OBZX,W~4|E=(6+NJ}+0j~t2g-`p&]]O1PPsm@HXmnT*Sn');
define('NONCE_KEY',        '<kqdTT>B`l&~.<k;qr}7Z~8NU2/XS3<Ng|-9{b-W,_-=:H70@Z,QF F7eH-pf<dJ');
define('AUTH_SALT',        '`zui]kpZWi>b`,Mq~} /O{+P 6:Dj~9RKM%T&VT|{>K&Uq!nd#q|.(`hX-n-4UXj');
define('SECURE_AUTH_SALT', 'e)/bQ2g9.U.?Anni}g[7HDwE #jSBw8LX4>DTDQlUj$ RH)^TR1r/qzD!cz{Zz1z');
define('LOGGED_IN_SALT',   '/ZAfvTxTr mQRL+Arzl}D~lY(e990OM~@KP>W2Qq9.6%4AY%hHf<qw;],*!DCk|8');
define('NONCE_SALT',       '%bY_G.Bd3LSArjX-PQ``YSd1V;u(0h,2jbf5Npxd@Bm>FlDBkH_uyB*:m~5u:%<|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
