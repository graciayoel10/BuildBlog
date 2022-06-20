<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u1656287_wp730' );

/** Database username */
define( 'DB_USER', 'u1656287_wp730' );

/** Database password */
define( 'DB_PASSWORD', '(S.uR10pj2' );

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
define( 'AUTH_KEY',         'r03m0eqfuf2y5gs4oriztpkap1wvbwmf18toukutdj1vsnspyrhdkbqsjai3j0um' );
define( 'SECURE_AUTH_KEY',  'hfnsqo2jzs6yzl261kwsirqikvid5trlyyllv6mvmkc3efhjtyfra6gee3wbn4cl' );
define( 'LOGGED_IN_KEY',    '6rdjv99oioivaqgmom5rcmp6t0iagv1rzxwidep5jdxbqitcyodw64dif7yqrmyl' );
define( 'NONCE_KEY',        '2hln7ofwfos1rn8uhtfsir6xsmgay4oqymyjf8irdpxmgteksoo6uspyfk2gdswo' );
define( 'AUTH_SALT',        'e2dy9yrt4ftfu9pkhsuimejjjk2bzkiqz3mnehjdzcdxiirpey7wymbvpqkkwpac' );
define( 'SECURE_AUTH_SALT', 'l9e58f34hnbvf29fntoxzxcq3ixeaf3cjdl9a5tbqbk21ljcpodospyir8f6yzdq' );
define( 'LOGGED_IN_SALT',   'dl9p5cdmlavkonzckn9zmfpbfwedzgpqewgdban1rleadckykktyapphpwss2rs7' );
define( 'NONCE_SALT',       'p2rvaau0ykowoam6qyszmbrvd26bntn6ptfplmvrpdlelhyctzdprqt14t5mej6k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbk_';

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
