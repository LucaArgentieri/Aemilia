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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_aemiliaproject' );

/** MySQL database username */
define( 'DB_USER', 'aemiliaproject' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';Jp7#TG-n cS3b{B?K#4BbQMlvt_9=gh-d$oxf#.0wx`!#=E#6-kl,Dk1H}Sa??J' );
define( 'SECURE_AUTH_KEY',  'v}3u8?daTjNfF vV6BQIkxG&BA1@6Dk!D2A]e]#zrT5^/ZF]Kn^84r8%<=X)v~Qk' );
define( 'LOGGED_IN_KEY',    'u>mxkCR%JrG{7wq-H9pAQR]/C}#;-$r%YeV=*[ l}aqi&cZl SID8_?Jqn+~hXPB' );
define( 'NONCE_KEY',        'H GvgsH5|o>$7]SB=|n;YUZntQisq^%`DclDe_B1|Ibt{/5fwNPwQ;(bz;M|^`Rx' );
define( 'AUTH_SALT',        'Cb<XYPsMxp;F!hC>J)i3AIv%8io!s8XeVI#2Sd~9c/wtk U!G}b3@~%=K^KoC~.a' );
define( 'SECURE_AUTH_SALT', '<>t_iSL&Ftfr7eG2GN[=e7jKJEIf$UH1m)^eF?=(dgpaA3Sm!j,ow?6SZ7jZq Ib' );
define( 'LOGGED_IN_SALT',   '@xoB0Y_s9Xd5Zl:>Lb6v[Pv,M2Q]QXWIgV)b6sWBI%NWQ;!PZ=Z)X=93w>x{-xPb' );
define( 'NONCE_SALT',       '74x3 ijTQ:KAU37A%j]:$pB5}TcWY[n+;2O7O67T_k]qsz(fVX*iVa7`ro7AyD!c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * define a constant to recognize a staging environment
 * remember to turn this to false in the real website
 */
define( 'WTD_IS_STAGING', true );

/**
 * define useful paths based on a staging or production environment
 */
define( 'WTD_URL', ( WTD_IS_STAGING ? 'https://aemiliaproject.altervista.org/' : 'https://aemiliaproject.altervista.org/' ) );
define( 'WTD_INCLUDES', WTD_URL.'wp-content/themes/aemilia-theme/inc/' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', WTD_IS_STAGING );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
