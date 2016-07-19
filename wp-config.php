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
define('DB_NAME', 'maria_sweet16');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'DI!:104lMHeSd6p`r$J2aN|B)PBG0|iiARm8,*Ul}=FDEg,})I(P+*CRa2w?i=gV');
define('SECURE_AUTH_KEY',  '^V*}*k%nG[e psDda&kdD{b|{V(h1}2C7cyd=K/GP+v+h*g!1<Q!RU}ENTS<d@$f');
define('LOGGED_IN_KEY',    'b=#aT>}Ju)t?L*n@P,a=g!-ev5]dL5.2>Oa%{PIY]7|&r0x7V9W2#FhOOnVPvA=r');
define('NONCE_KEY',        'vy|UrMKDR{BDu1$KWN$^mZ4GOivo9hI#/!+=%`ivD5UU!T(,Nl;U-L4_9C_TouoK');
define('AUTH_SALT',        'QPJjh?O7@um^:8`<3Q#40j2Tu}K5BLH~TjCU24-`8a:dPIwz{?fQaXz8*O52_kqB');
define('SECURE_AUTH_SALT', 'D[3W?G<jn&j=G7? EDHyk{2kbO}@OqOp!0mW%/gj=2>+suMd[N|||S}T(6CH$td3');
define('LOGGED_IN_SALT',   '1:v9qrY@7eif)4,CmB`lH)7[$:yCEB5Bu3[.!@(M5aMd=w<lHcyob5_78p.AW/AB');
define('NONCE_SALT',       'Nz8<w){m;*8-s36pl@{3(3=HLY-0qQBc#4kp;^oN H7[DE3?_AO4rpf.R}632D!n');

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
