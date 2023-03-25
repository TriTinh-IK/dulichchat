<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uufyndalhosting_dulichchat' );

/** Database username */
define( 'DB_USER', 'uufyndalhosting_tinh' );

/** Database password */
define( 'DB_PASSWORD', '7)*mDtl~j+p9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dreUScK ue]^Yv!&o!3(.2xZ;Z}^.:+v]%fObplncG#cpszco0|XfI^0r:~sKql,' );
define( 'SECURE_AUTH_KEY',  'oEY_8SXru@y>)vASj-<]KF6?YjJ@lAoUps1kE[3=ZyU&O5p%#hae) <N;_4Xoi)`' );
define( 'LOGGED_IN_KEY',    't>{-~5H?pzah($Lr%Zk( kI&I#3|]zO7i32w{GU4-9DSOw;ghb9/n.*o5moR#TYl' );
define( 'NONCE_KEY',        '0*j/5N2*B<$}]$u]jU1sc[xDcgS?<?HYC`N;o2lIFuf`W{_$Tl:BL#F=+!^D C??' );
define( 'AUTH_SALT',        'QWMJVkUY|V}gN7GX4uvvLkq{/FYHT;*oUuc!);MLy]?GLtTxB7@]3h7O$nUK[S!I' );
define( 'SECURE_AUTH_SALT', 'gdP2sjYl{S_Rv!0P;#lA&r]GN`OO#G!0mUn^2HxW#(ZmOor`<Zn|a542_$Yc@#3|' );
define( 'LOGGED_IN_SALT',   '3E$aDLrvtbPBHDd[znB)@Ah%7VF)0H?Jx`q:.G4B?pdG(3}4y.7vTc!Cup$M.LoJ' );
define( 'NONCE_SALT',       '1lbIR{1,w;$+)R]t3yxzy~E@^|dYUWot2+gM~hGix`5=hvF,r<ve|QIy{.Ec)bGg' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
