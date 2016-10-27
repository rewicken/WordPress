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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'test');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

define( 'WP_MEMORY_LIMIT', '256M' );

define( 'WP_MAX_MEMORY_LIMIT', '256M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rt,|4%~c)@%K.UzQ9.=E=Mu&sV/lkP@?}ZKL|=Is:e+KXP,#n-fO.G3>f)wm1xs]');
define('SECURE_AUTH_KEY',  '~%%u<+S.y_]0x5 ^%hQJvg,OXx,r.&X]XN*?1[Oef;]UL_}^&oUZ;DydH*X.y8eO');
define('LOGGED_IN_KEY',    '^`sB/Eox93FJCIX:JIgDhpt/7+fV)11 oI6r=b@i)Z00DR/AlfWCFr$TH)?sG%>y');
define('NONCE_KEY',        'n:D|aC_lkjjWXrcG!B`#NZ =^Z6`&.naWg&KD%^IOc;oPFWr>q@FB|WgSB5KO`(D');
define('AUTH_SALT',        '@c:linc1[3eCW,A:RYWt/X!Y%}jc*)XPdABDsX=pC~0qkt^26Ny_duT/)1l$@5%g');
define('SECURE_AUTH_SALT', 'MSq}~$%2NG=XUD0ge+(d|iWC2hKD>EVv!eK:6@7l)HyX.9L<bVb hJR(4S0}In%*');
define('LOGGED_IN_SALT',   'jbR!.0bY7%O48TxpIu}~oE.ONq8ZS3DE44(~mu?Ol_X*3P[ 0k|^40/0L@N/77`m');
define('NONCE_SALT',       'YvGFlY:-;&#v~e7MI;%0{ #5!0a{cFK ~YN/i5qJ!_sUg!7o6WnsYl-_$M9Y u*b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
