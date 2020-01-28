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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'Pdt4-e/%dPax,#%C!G][CnWF78d*-Q6i5WLFk4U,bIl*LDDLld66%dYrU*ezds9X' );
define( 'SECURE_AUTH_KEY',  '?tOn%}5WVV>cVQhX-VV4D9`@!e;H9gT7k0E%8Q|%=&[R{Q?5`p?6NCv )X.39H:)' );
define( 'LOGGED_IN_KEY',    '>8pZ{.oD_I#!s&k6Av7pkbJK@Mxs!hGN&Cmk|yW<BalQLiDL>nW7,Y!fUv` 1T^[' );
define( 'NONCE_KEY',        'Kx99G]}Cg1|HEQ6;.T#U)B+/P+]>}%1h0FAokPVl6ohH->0LR*(!4/!tMSp9_>99' );
define( 'AUTH_SALT',        '?*;1nb%/JAQFh9&M]I!DLUSQFm|zXlzrP[Q?_?C!ewXJ5{5l2<z%]07AIf.S69bk' );
define( 'SECURE_AUTH_SALT', '6dA-7NIILS 8RWghp^P@xEuk7aLbPlz:O3r^DuLh1PNL9qyr+nHAx+(P9C<8z`wG' );
define( 'LOGGED_IN_SALT',   'UR?}_H;{ tuV..lv#DKJaNE:!]8ebVO:%Hbi>yaLN56:nrgMMQWKc3U?a2g.1!Xo' );
define( 'NONCE_SALT',       '`pP|0(:MHdA.N!>)F&HOK}~49!@esr``}nTcnJt6CR_WLdZ>sePhKFUS:}u&/=K=' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

