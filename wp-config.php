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
define( 'DB_NAME', 'kenzowebsite_db' );

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
define( 'AUTH_KEY',         '{/Vn!1Z@zZZpF}uu=Kb$@nI.a!``qGwBf4P=%*xx9Nq %E3c#x&[KXA/`P[#phiZ' );
define( 'SECURE_AUTH_KEY',  '(+,KuOI5PXiF^8eFo:8h9ei-h,U9z[)NmYd+V:6ramF1,^[xs!w`}^l6h$-<E,cb' );
define( 'LOGGED_IN_KEY',    'EBw@Uh9PC nKmc<4XVchOuA1Af>^V[qx5QLD E#5ZnjoA{],r2mIlbE[<Ivbq<F}' );
define( 'NONCE_KEY',        'T:&F:)=g%nmURnH8;EG}ym5Le>V0NVx07/r6{8%Mf7wo~-W^mpusYCeO/vzGyRm/' );
define( 'AUTH_SALT',        '$/3<D91[>jBW3S]lHo@Jr;q.d^rZc@dr6y=C~%yWH8A~flom/&Q;;jOA|1Rt)lA7' );
define( 'SECURE_AUTH_SALT', '(hjq1V(PXi5JqrS_e:xS,6Gu^c&TC4C2+z{f?RH=G(.al$$Y0@Nis2tgy2lH1ftm' );
define( 'LOGGED_IN_SALT',   '[>%``yIC*pYB@8T.wl$VP{p0N+&Dx>EntZ^cvenFCP/eWXs%eTHQE1l17vb|2((z' );
define( 'NONCE_SALT',       'o+OY%Ra*%dl>84zDeZLPlCX?vin-5Y[bSg8m^14a75FF_Y=#1EVW,55U3O!f[cL%' );

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
