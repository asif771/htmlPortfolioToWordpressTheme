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
define( 'DB_NAME', 'Wpbeta' );

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
define( 'AUTH_KEY',         '<j<PZM_yqY~WZ>r/&)NDEU-u1+P]fl/ADo>Zax?2-,[Lt8:.cV[ +,APvf{r..Yw' );
define( 'SECURE_AUTH_KEY',  '>1=/@$&?fMSfCr#%3MTi/~/A/j0ik]6BKB/tbdw~s8?).%6l #0-yh67Gq*w-/^|' );
define( 'LOGGED_IN_KEY',    't}U,cJlYW#Dak4V;5P+?a;(1FS$wg8>J~w)(OLk0=4*V7}@fJ{J>C]WP>?d7<~Qf' );
define( 'NONCE_KEY',        '!~|eRsYl!`=v{m-sZ;P=q&;/0QA5TvHCyAc<^FXiJOAM4kG?BL8oizLBBAb@,cAl' );
define( 'AUTH_SALT',        'MlbB1N`B/k3y?}|VGXX5UY|1&{9r{x]O>#5M^3ltt8&apxsuA~T|+BRA4om{Qc/,' );
define( 'SECURE_AUTH_SALT', '[-ew)EHG<cux)!ar=Jkx vHhnNwK2|4u I_[fD5SsOgu:YF0>B%w0uz([O{NuD*v' );
define( 'LOGGED_IN_SALT',   '?DgoI![K&NK(1^kBG+r[:(x@@IKyH.G&/a_U}nnJKL3apMctD#ox1YfV3)JEDp F' );
define( 'NONCE_SALT',       'pLEH2)rn]PUm|7^gQBYCDJZ>QzXk?IJf~V X@I=!q1V5qUmK33I6j2Ml)fv!9lK-' );

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
