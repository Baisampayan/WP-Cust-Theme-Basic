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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theblube_wp_x7cei' );

/** Database username */
define( 'DB_USER', 'theblube_wp_y3pei' );

/** Database password */
define( 'DB_PASSWORD', '4%Om~8wE#u9D@KTt' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'Vq6hE#+o9[n(q95:7BAxZH)G6vfAU[r-V[72k%/4W7gd_q&&]E1nZp7xF5uP7/cz');
define('SECURE_AUTH_KEY', '_n@89j;;7f851-3]n3Cl3jivC96I791%gr[7+*9W7l1cH3I&6x6Z44lsZ//;f9V+');
define('LOGGED_IN_KEY', '2qi57Eef!iVaYk&Q1NU38292(j!K@:]W~Li4kGjlPQ7uEng-j-Q8iYP&7*3-59zk');
define('NONCE_KEY', 's6ScaB/9x]ogL7l&(Vj:Qa[8B8823hV]W@RVy1vx5Qx6uy3;j%QD5Ak4Rln7/2|:');
define('AUTH_SALT', '(bW88D-/94xCZ4RZ8Wx098%aCRp7/IV3:4;RQ3(QiGVa|Pw8R8:So|eisUA2qOQD');
define('SECURE_AUTH_SALT', '-H4T4(Cu3tznQW+(c[uG)#JiJc1I~O28%33AP7#|5iJ|:hBf32o1/9+Anc9rYu-l');
define('LOGGED_IN_SALT', 'g*+rR4~k1Fe~vY[U1y;uYwF%:3[&#1IMo(9I4[8(;j1tW(n%#5He_-Xpq7Mvyk(]');
define('NONCE_SALT', 'p0~HN4J1l;fTH4-G+UFP)Vp0mQNAsxVD4Hy!m!1R/U9/p7g%b+wJs_]:#E*WV44(');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jXvenV_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
