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
define( 'DB_NAME', 'ekored' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E$Ak^(2|`!+QU*}fFX)1I~,b&$2#XSssy[b:Z9Q_0_P,[y$<?[3Gm }TGy}g_cCG' );
define( 'SECURE_AUTH_KEY',  'P,o)OasK.<XV;$m%C,##GU-!@65?M*~, OvIPPD+DbW<4g|Pc}oHpL+^)dW78Xzv' );
define( 'LOGGED_IN_KEY',    '@l~<h.o|hZ>NMlqyrvpDGEc7r0QN<#A`YIJi/ef[Y_2`C!v(~TBulF#j3tn;X@sd' );
define( 'NONCE_KEY',        '!yLjfSuI(vZOQ}Tit1+yz? )_6.PWF$Z.JWRs|MZ=MaTG#SAd#K+@q%v9LEC;>9J' );
define( 'AUTH_SALT',        '}IV}YPI|Q4jMAi]GUW5E$Toj5!ej1:?GdUU|>Wad$dGa<OV31-u;)w>GiY/8IYI{' );
define( 'SECURE_AUTH_SALT', 'LqV(@L,W2J)(%uUU!mLUYi~kE(9sBi[up/p`/xJuQC0M}wyD{Hn:omCZLY^.6`CE' );
define( 'LOGGED_IN_SALT',   'xew~7hl<T6rm(2Aq{Z%W1/{&NkwmE}L*g_Yk(o|mUGIO(yN:`EPmkbBc&):4M1#,' );
define( 'NONCE_SALT',       'vp@+OrNr+.2wt8dqJ~0^}|y_3t/H!|?j(<h_y=z=n.NEgq:*=;U]n@St(f:MQ<p0' );
define('FS_METHOD', 'direct');

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
