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
define('DB_NAME', 'gpa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{`P##_yAD$7xn0|)Ut2]<KkLUTr?+H92I^x`.h9=L}cGU!+-cF#kP|SEQ.viCr?!');
define('SECURE_AUTH_KEY',  '-hs%lIS]G#9OUZs39W0mK[+:ZX=@W4>Qz<Y)mxQl0UW-5nS>Ce-kwN@i7/t?9Ogw');
define('LOGGED_IN_KEY',    '[aH;+Zw$ml!o&wSNi0-o0n6~Y4Ib$^28]xGU.C?qwGas58PXj=}b>{a8B$40~?V!');
define('NONCE_KEY',        'h$$(T;P;r8Pgi EDx)y^Q{T}{*n#)NmKT@m6bALfew*m3v$el5Weh^T99rJ&}#|.');
define('AUTH_SALT',        '%~#g,]jPZ|`fQDn/.J.MBI&#o=(&>#Rh@|ooSnm-Z]+L%faTtBHb,1zK2|oGXQK<');
define('SECURE_AUTH_SALT', '0N?0ev<18ky)3n6_F|W($h;=P?l[AvxQW0f5faP1WK/~~-y&-p$Rqj}>Zi*I3@Fj');
define('LOGGED_IN_SALT',   'l4+Apq-wNgRl8>9@!++x-&In qXfLu!AQ^%;EVn!MdygRavARH]gR})Vi ?/AD@H');
define('NONCE_SALT',       'fmr%XS/Q)Y~8PHK4}_wf161So:-q (1+2HazP~q9Y:Px]Q&2b7MB0-Qtv D=4ViN');

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
