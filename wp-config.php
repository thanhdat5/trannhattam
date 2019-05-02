<?php
define('WP_HOME','http://wordpress-269698-836653.cloudwaysapps.com');
define('WP_SITEURL','http://wordpress-269698-836653.cloudwaysapps.com');
// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\trannhattam\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'trannhattam' );

/** MySQL database username */
define( 'DB_USER', 'nbhjqrkmzv' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qXWDgw5fU8' );

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
define( 'AUTH_KEY',         'QTuRy_5#-:Y#~X,/MN2cjx1>B=3KG8r_0lPHT6.]B!.lv +k{Cas0zwsacZV2yr-' );
define( 'SECURE_AUTH_KEY',  'zY6P(mb9#d@d:,yhNE9&y|9jOA>K}KiwQ5l>0UDNL {WjBV@ojX+[3!) aUo9b0f' );
define( 'LOGGED_IN_KEY',    '(dD4FLK%j=EZ]3K=0e8yIlu.v}J_$^xBD%_>xBu-LB8@>}M a*/$x%qW@m8wL%6*' );
define( 'NONCE_KEY',        'L70O,Fa>_JndC4!t!e|J]sXN:Gr5X,]xJ9t0BJx>~/P0Z  hfE!NYQSk*Q=z^7t5' );
define( 'AUTH_SALT',        '**7}5N[(boZ^9z9TVx^yS)9=g?~A!O&/!KcICQ ,.@ITWW]Ws3,{bi<{]?!ez#*N' );
define( 'SECURE_AUTH_SALT', 'rw1bSG-w*i%{CP&0tO<s]V4`j%yLMroefaT:Wg# 9t)/hyAcj&onE~d=&=5?`l.a' );
define( 'LOGGED_IN_SALT',   'Kd0ZZuIqdiEEw|[MHe7k>9Dbiy.iVrJTKQYUD=AFq5_/une;UMc X^,LAa@86C-z' );
define( 'NONCE_SALT',       '9<8(BA,MIKCA#u5l#7e`[@Y]dq<WHGc Jy?Q^R5Qb=8qJ-MLYdS;e_FaIz;4<kE_' );

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
