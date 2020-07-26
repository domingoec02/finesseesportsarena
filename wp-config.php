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
define( 'DB_NAME', 'finesseesportsarena_db' );

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
define( 'AUTH_KEY',         'rx:hGK6P|17BME6{&isHIAdc21x.39 D ^{JV+o4{WLSqgP8 >UqwW%2=-]8P8Ci' );
define( 'SECURE_AUTH_KEY',  '/0XF6`xSDq<i4^8997:5></zhKlWX7^>PfRh}&3d<Y7_/X@Wd)V%[?]9 zKywLzr' );
define( 'LOGGED_IN_KEY',    'b;ECY/=2^L6c7;*BDGh-#Fv46UNWeTE@5_m&4O:Jbm~>`05{tH:d_*P4FZ|8F$:H' );
define( 'NONCE_KEY',        '^gZ#<hnL*l>zPLMJbThD*=j[J9K~ _|)p}$S7_s;(!|>eIuJ-gi#p9FVsniCp1Y6' );
define( 'AUTH_SALT',        '#-]i,?v@bW4I9iSHdkP2fi(jA:LTp[Wx{o9h`E6vu7@Q<U.TcKhus[S@6ZsQJU2`' );
define( 'SECURE_AUTH_SALT', 'Pj!@B[J)E6I8/tslITTl6m$PSz7?7]_G,B[>CuVZ?2Y.QLu1|Q+JHbth~E}>1qdf' );
define( 'LOGGED_IN_SALT',   '4m_Vs/P-KkV:TC ]yt~}dzBt)N1w:q.7A|L`I6G/:{_mKWm4Md0)s]J-,lv?0&p8' );
define( 'NONCE_SALT',       'P;nZUOe~4~/$:zazo,[08kVuq=/6<vk=O<THLK*YS6KB?Ag#dH5h.)|5!1%iJCFw' );

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
