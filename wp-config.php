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
define( 'DB_NAME', 'amy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '%GQ/spFS+m@:-DF]yp?#Py>gf_Vo/BTPK]j*IT01+`hscH#{j044T$rR(YMj.hG9' );
define( 'SECURE_AUTH_KEY',  'U8Lfb(ppWi?aRhX-bjSJMi)$k=GVTZm}bp-(@w1rawb7F.F,-gL4FhjW88;niMl:' );
define( 'LOGGED_IN_KEY',    'm#WKG?75bwcpq)nqK]:3W~S$uqLIN]<ayNGtu|:PBT:],S;fjmCF4u`}Qu_tud,E' );
define( 'NONCE_KEY',        '.v{s6H`gHR1[KI#2{Ud#QlrMM(#hq@$YG3Oy-CpSj:LL!u6zY,=4)DD[%e<9e85m' );
define( 'AUTH_SALT',        'sV?__1G?U$GuDM2&)N1jrbrk?I.5(Qhm:bTCsVd~og>okyoX[<g!$b7]tmV?)#xO' );
define( 'SECURE_AUTH_SALT', 'i[xB[:2dX}{T:Bs0!dq399+}8s^Yjc|A1~)]nDKRnChEw(}/6S4,~W/}uj48!(|r' );
define( 'LOGGED_IN_SALT',   '2,A5&%~&:Ox{*IGBoYSq+[]RSS{OtA-jo[pM`_/J*d{ffSx0!Me$tI/AX?jq*cmk' );
define( 'NONCE_SALT',       '^e,m=dKF+=9dW~!$}`l$EiyFdBnCha*tQ@nFoHD%^@wz`68)KY,:;ugsQG^=k`VV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
