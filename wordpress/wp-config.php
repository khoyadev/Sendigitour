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
define( 'DB_PASSWORD', 'passer' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '].q>?*whhVRbdXZhn)a2[O4n/p>oxUEv$`>[<oPD}Y2KFfO+{DT1J9ptOupcqhEJ' );
define( 'SECURE_AUTH_KEY',  'vn.dvZ@zB2L7oEi8ld_ur+E9Hpc($0^gYhdg=x;FkAikSHzda*@!]*^8:~oo.Oy,' );
define( 'LOGGED_IN_KEY',    '3:(seh(2c`Z,PvK{<K]U[?hr)*C[YtWaqQN08!R,f|hKZJJ`[w+nK>oncrs12Y<c' );
define( 'NONCE_KEY',        'Yk8j#G<saNEkrM+z[BxJ0P+Xx,~-[^QISL(D?FN/)$1eF~MRk$.5ue H<W^HX]s(' );
define( 'AUTH_SALT',        'tA,?&7(Xy7aR*EW.(=Ok]piP,_(CFc| p!3Uzkf7*Oni+M_JdXIO;XwPf^5.$53&' );
define( 'SECURE_AUTH_SALT', 'VjnDkHUk/X||kH+t]P)<xm.w9CO|Q2zMxhSX%:7ZY{0lh1bR$&p>Ytz$Ej4M=geT' );
define( 'LOGGED_IN_SALT',   '$;NMJ^H,@MWgmT095t_yN6fqNMW9kU3y<4MbR}]!hjTUF;yrqD2ev&|AfL5*6z- ' );
define( 'NONCE_SALT',       'Y PFEAUfUEiQtuqxP|s^h9;P}*X0VQ8_f+=4wZa7)CD()]@Z`XUb]~>L32~X.Q:o' );

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

define( 'FS_METHOD', 'direct' );