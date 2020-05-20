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
define( 'DB_NAME', 'kursach' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wy<2+>ptP8vHrAm>>KwXS2`1Cx$3>CfReXIgZVK)@.D4#Sj+u3D@|HjyKs8zvbAx' );
define( 'SECURE_AUTH_KEY',  'j<!?4J4#7/J-/>ti| {F`*S8,,mm/+B-]73.cz5V{3@U>s#,xPOU8*(SI>lqry:)' );
define( 'LOGGED_IN_KEY',    'hHUBi*VrWJ:;Z,2S!vkEzYp`($O.Y18:^x|AyRPOKOZ^#SGSTlk{}n+A({Ynbk2j' );
define( 'NONCE_KEY',        'Bw8s3hjpC[Mrd8 Z<G $R/@s5;H^7S+-5q$Azn?`fEj1s:qr@$p6)6EknU.B]%q7' );
define( 'AUTH_SALT',        'FEX.DSxpD;BRn,6Nt{x1t(*<mlh~sZ>7?>U?[r$kQr}N@.hU~z/`xN?.)VOT%[f3' );
define( 'SECURE_AUTH_SALT', '3I11Se),}Y 9x0b <Q6s>21Nldrr.Zkt)_.1W/<AI<&*!C@AY1ljeuk>$p29pMXn' );
define( 'LOGGED_IN_SALT',   'W.%R6_lI5C+1f/&avz_ _pC:g@=K{w3z) p_BqunHJ~Ddv1{%S9k/+$o,@7Y9O^?' );
define( 'NONCE_SALT',       'h*z@+u]dfb5nl8qjIkmz/BE~?m6gM`BG;tZ?~2*))>B}[>[lySTvm]ds-2u%9.wE' );

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
