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
define( 'DB_NAME', 'icegag_wordpress_db' );

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
define( 'AUTH_KEY',         ',mB=(^,9|W83B`KJyUWwqi]Vwg]TqbeKdQ!Beh.NeADr9j)S@Gnw@JoD4RbB~%PN' );
define( 'SECURE_AUTH_KEY',  'nIXp uUckd1i]LmI~mZlm2X3S#H[YqNa0X0Ub~Os^Ql(H&=a|?fkYqYf5:5H%7DL' );
define( 'LOGGED_IN_KEY',    '`?<^hHAWrczm}ZX;g{@FEL,>7arhoGro(@5s`vD/:9WI%R]!FBSS[Kq%o%4zbt-<' );
define( 'NONCE_KEY',        'x=~Dv((o8RlU%ooFF1CT]]S0XD_zHz&zhlsx` .}CQw(@b>5^2hYr6t(2M>#=F1]' );
define( 'AUTH_SALT',        '-2hAgHI:A%S+0U~:JCZ##1nm3Wu}$8jKTM vTj!:~@qlxYBuf *Wj1@.AgxJ,~ER' );
define( 'SECURE_AUTH_SALT', 'kkaFJ;U 7cM];A((_pS0$0 KgHQ~k7Z^q}KW<QTpY Ls}O>=;V(vBUN|C)t=PK) ' );
define( 'LOGGED_IN_SALT',   '4:Ce U6&1mG7dwqo-9Bj4v4)t&aX<rzQT7_xOP>V2@n?yJvM_hrMT|)g8Q]EL1NB' );
define( 'NONCE_SALT',       '>=^l!ES)kB4W>4v{}8Tm0mT}C8{p!2oVgmIw!jI)=Kfq^qV,]r8L2EH-/?hP-%RK' );

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
