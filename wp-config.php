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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r_TCAQn!WO>yRJkU8q=K|#Z;wK6_U}=B}_{ut$*m8xv<i5$Tu+7H[E5RF-Qg(fsl' );
define( 'SECURE_AUTH_KEY',  'RL)%]%xHsTc%&Mbgx++9QG{[VWQNUD1gMR!~y]P+?Rur)L=<d:7`6S[(|%gM?NPq' );
define( 'LOGGED_IN_KEY',    'Lr+,f|x9w6kSNB=tEn^MBh>B~(OWzffIL}!9624P]~sQd%WU LC4lO!K)y7N63p0' );
define( 'NONCE_KEY',        'iM,O_2.6x@:X&@G+IZ}Vnv}dZ&,rdB =F]m&y[^Zu*1brAx0zL/tepLidQK TZ`k' );
define( 'AUTH_SALT',        '0E;EO+4mH`Yyn]lRp7%C8zzjl:d.;ln5*vO7iMvF*+/S+L<8JE)zf1mIpn?f09> ' );
define( 'SECURE_AUTH_SALT', ':a?uM> TH{1@RF?GIVOQO=XHN{;hr]LQh;644t&U]xGe8+m#eEIgA/Je-V_VNwxI' );
define( 'LOGGED_IN_SALT',   '3wK7-#!Ex,-?>3*|?&x1SlY3C>A@P(L{$6>}o(ij5~&O()nYrF;+iK~+T(B#)TB*' );
define( 'NONCE_SALT',       ';do5x0#),{yY[]oFaHzrpGGCk-(#^qw}~Rk?ho?ta9Eh1ixi@eF1-$dh?Ty}/y#`' );

/**#@-*/
define( 'FS_METHOD', 'direct' );
define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'all_';

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
