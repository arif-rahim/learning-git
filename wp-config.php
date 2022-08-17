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
define( 'DB_NAME', 'homey' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Lp/md&oirt [8Ye5`[^]jx4O6%-`8x1%8k[L`nt%FZv=?~Qs[obnFyw?==jME*1!' );
define( 'SECURE_AUTH_KEY',  'Oakwd68&_qK=IXGyWGX@Bn$H!gw?f4L%pNC(8?F.TMSG;c)pY.O0`}E[Ze<KI4 ^' );
define( 'LOGGED_IN_KEY',    'O([FIFI3>9*vlX]xV/{/r*d(@8T 0o9yAM{71;h0wT`er75,_vEZ9oN8Lbyt^om1' );
define( 'NONCE_KEY',        'n>u5;x zA5;l]=-ktiokJM*).2#)lq6>#^`2L&onf^Y]?i4GoI[MU0/=])aW0-L<' );
define( 'AUTH_SALT',        ';!m4v|RE#D>NVupm3*MO)WaGY?gXc8WC r%sseP5)Ic02#xM>3(O aL3@:x]OK3.' );
define( 'SECURE_AUTH_SALT', 'GxP2}Bz2;,Yj?~<C:L#PI/P^XoEjp(~F>Vrr1~3*^:.];1Z{XAqJs?rB;&zL.{zn' );
define( 'LOGGED_IN_SALT',   'biS{iE(q7hC5gTF_x(2K88J.,TKa{973a@dQwgwJ %LJ8+n;^XC(x*2@xVLm_vj3' );
define( 'NONCE_SALT',       'DfAyix9CtKSo_V[,3l6cAHGFm<l&bSsg/qPx_Z04286/%+PIC)}rgW]G?8#QW+|*' );

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
