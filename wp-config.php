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
define( 'DB_NAME', 'cms-wp' );

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
define( 'AUTH_KEY',         'vCDdwf;DVH?^N?sg-VI j#?1% %<6bxa5}I/|@Bed}E;B6wO$|M`:Mw0Is!#iO@O' );
define( 'SECURE_AUTH_KEY',  '(i*KMhWT4)B|H=lSmRlw%XLm>+qpXcAX9R@$O525u `FQ`bf{s}#Aw*Ip4+qwu9w' );
define( 'LOGGED_IN_KEY',    '@h0^-$7f#<yAHTamh&% &dnIxCM0W[R;bJMbcdh|}F@Q>TqfLM7b@+pfB8R+~P9/' );
define( 'NONCE_KEY',        'I(9J;2xs_[`+<fhQ6e](WV5PlQ;b<L#Hn4d.@VZPyWh,[dC55>HmfF<{5.%B&pkN' );
define( 'AUTH_SALT',        '|d +,[w9l~k;xi:+IJ3+HTOOV.^(s%.gm3&#:~t(n>a-H:TOiX.a&7A}-Qly!Nys' );
define( 'SECURE_AUTH_SALT', '7n!sj:P#|GJb,osE5f^nGf8>a!l9z$zRB+)N{yRePT10WL:o 5W)Cn~mYaUXXYV/' );
define( 'LOGGED_IN_SALT',   'W8srjN^*<.|)BhGMK<NF}*_H2GX)Qo9o=h/+ud6-w-DM26~7C3H4qkJV!D^n?Cqt' );
define( 'NONCE_SALT',       ' D=>et+KZ9lTB+(0nD~i0E8w8@XcR+>RJG0f#6^rw?R{15VMFapsatF-5+]hO:u;' );

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
