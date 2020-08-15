<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'testwp' );

/** MySQL database username */
define( 'DB_USER', 'hendry' );

/** MySQL database password */
define( 'DB_PASSWORD', '787898' );

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
define( 'AUTH_KEY',         'vjabH6y,PMB#?I8S$bWrjEk(yi+^KKi6we07-BAte=%~=~;(?,VsP]{?F<3i-:/<' );
define( 'SECURE_AUTH_KEY',  'f$hg|@d2D5?YzFrZ;?u7v3-k4%Jz(=7J@@uO{?pQq5_o(m+0wyw}IpIs;X(4[/BE' );
define( 'LOGGED_IN_KEY',    '6,^RJ F/ *7JC?YhpZ|;Ti?ri44Fv.jhO%.;eK)#-a:TZ;-$5bZO im_vMVXJ{(S' );
define( 'NONCE_KEY',        'ov>T1~$XrGQyom[-:[d`(-*7gBU~Gj4skquf8-pO),!Wu(3_|zygC?lM-!B8:PrS' );
define( 'AUTH_SALT',        'o]hzg(9nA^Sgj?yM-Ss Q-5k-458N;K<;@_{fT#?D^{1/C`6TNH{eW *Y8#9_f.]' );
define( 'SECURE_AUTH_SALT', ']#H2p^y1G-VekD0/1O$:aqbKM`q)0ALDv8-FGV(ome-P@49=a@*b9l7Wa)kZ?IDC' );
define( 'LOGGED_IN_SALT',   ';j;I!bg3m}rQy4wq{FmNDEkOM~e8#(Zd#H:Dq>`3FGqK$lq,B|zeb>Fw{(j|4Esy' );
define( 'NONCE_SALT',       'n.&oHaP^LhEmp8o4tE_`Nqk?M@JXAS& 7d^}TziA9DqHn(e#Tj[_J3E7odimiS^J' );

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
