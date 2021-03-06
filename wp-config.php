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
define( 'DB_NAME', 'parkensms' );

/** MySQL database username */
define( 'DB_USER', 'parkensms' );

/** MySQL database password */
define( 'DB_PASSWORD', 'parkensms1234' );

/** MySQL hostname */
define( 'DB_HOST', '198.71.225.64:3306' );

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
define( 'AUTH_KEY',         'VIm)s%A)<([bSb[0vmpym`a&~%#Aos!O!{T6SaUJ=Tc{/X?pgLs^zAr]:ie=dYPm' );
define( 'SECURE_AUTH_KEY',  ',7)ad9(<(]:<S(b.79`%tYa|uJ+308*r`uO5v0}%fdX9[FTJ-~)aE4`SPQGpZ6#,' );
define( 'LOGGED_IN_KEY',    'Z9R^^nJCfga/,B ^u3:(>Etd`lSAeic[042AfL(.vTLsZ|4|a%Za<27U+IVV6CKF' );
define( 'NONCE_KEY',        '#xL@k<JYcMa9D.k?z1`xHTxm&ZQU@cH[ ^);0huqm:QDOiCOWF:t~mbC..0&4:sc' );
define( 'AUTH_SALT',        'pR2+Z5,*De4:eUKQ8]Ol4TNvtq*9PJs#G@&*khh*gE=zHjdNJFgePj@&aJ*PC@*9' );
define( 'SECURE_AUTH_SALT', 'M*r?90v@K;~yfh$oQ4gw(.;[I37-Tkoal?[a`<t%mv[rTaS6rLCB;*K6lWdqFqF!' );
define( 'LOGGED_IN_SALT',   '28JAi,AlMT_0PK+N_g#+595*xF!T`|!W 9{:!vzWMR69l+z8Z#BciKUM[;Fe^,3)' );
define( 'NONCE_SALT',       'CVDSq$Q!hUd/,ty{5k<2b)!c@V6.tuW2`qKlDTAo r=VwW}JFcM>bUR0rZAQ_4JB' );

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
