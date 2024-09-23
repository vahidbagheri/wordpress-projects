<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'VahidProject' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         ')l!j{o _4`n(3)x}Hg&I4mA=P.T8{|TZ7MshhGOtoH3U/E}U^Qe0jq Fsz_VnR^8' );
define( 'SECURE_AUTH_KEY',  '(gg#mq?!N<a`!{)qyMU4<2>=R^I5a;U&vJ@Isx_PsM=**gp:=?2*Bi5nDvq?!bmI' );
define( 'LOGGED_IN_KEY',    '(@ 20]rR:R9s0+zT10Q;@Cd.+E#8Cs[FA#jv;!vXBL@.u]`G]<REK2g=_L  Ju[R' );
define( 'NONCE_KEY',        'QGlaE&wna(_$MSm-du;@MUZTUA}KRqlWV>4/W5y;D*5Y47#kEo/`4RO)r[HR;A,C' );
define( 'AUTH_SALT',        'yLEcTU`F ?8lW=.M!8 i$,9u{y+n)kr+%[ZoH|!V(Dl:r`<j><Kg3FkX4tOzqRh9' );
define( 'SECURE_AUTH_SALT', '(<G/#&z*kwGYYt72V(m&jt<T5Xcf=w0/J+`vS1<hSfBxH<-YSN86b1>FWL:Y-V&!' );
define( 'LOGGED_IN_SALT',   'njwy.O9MsHAt4}!T~A~[d|VvQLV,)}^(5r/rh GLdLN&7Aa9ELik1:{|[3A&k5>l' );
define( 'NONCE_SALT',       '@m%v#0(|7KegKLhMtAZBvECTB,?QJ,_J^>$#EgucbK^+h[Tb?(w<>q>#(Y0dkF73' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
