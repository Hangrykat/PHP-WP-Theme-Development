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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ibesk1108' );

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
define( 'AUTH_KEY',         ',)bh?7O:N!vlG?~tO^QTOkLIe>+r6bx{DP}# L%Is{~C%?ecR6bkoMXR=@&x2 *!' );
define( 'SECURE_AUTH_KEY',  'zqp>*e~cTslTG(S>W,MhICYfHb`Um220~d|DAVzemU:%7;R:Y%N&RPp8Kay.IQmw' );
define( 'LOGGED_IN_KEY',    ' b5rez4))UOHWIjy72DOOMD;RLz|b/NnVp+RN!8JU,3*=7:whDxK(EQ2ZK9![oPR' );
define( 'NONCE_KEY',        '1,i8y<y1q!A6y51#ek+]w%V ]thpS:=!FUkcs<@*h1@(*0|zeB`/1FLS~D99O()!' );
define( 'AUTH_SALT',        '1<ww)^r9`~(2H4(:tRlS>Dw=;:h!fFO:z;_!uxAMsa2n,i9NMS%^? ]Bi)OD$&2q' );
define( 'SECURE_AUTH_SALT', 'R[eUr3ARm02g1!E+PRFgw/@IK.|^*p=QZnfTi6a!ulTK_m|VQ3e7O.< q/:Ey#gg' );
define( 'LOGGED_IN_SALT',   '|5Ve8@h_/qE3l<ou(Cser-hQU4QE^:T}GDGdFKfB0R9qO>-!!?<47Bf$<U7%b#1;' );
define( 'NONCE_SALT',       'Q+%0K[B=bNF<P$fZ0pDU(q|<$NfAPK&DPC=YXEl#:!cp<h !e (5/Bb sR@~iP4l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpblog_';

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
