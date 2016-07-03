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
define('DB_NAME', 'turtle_okinawa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O>c?9%Ab)Mn%ewGyQV&cNlA/$cca*E1xR@10,Cc?Z!tCV{<Py_E96)|#Um8C9EAP');
define('SECURE_AUTH_KEY',  'qCRmde!Mnh`UHXz`^^mppakGp.*KZ&gCbbYSl62ZxWxhg$xsVi(Rzmy[}M3Ur@h5');
define('LOGGED_IN_KEY',    '~oI/a+G){0J1LoV.!lX|iqMru:nCcv%a%VlO.JO5`y9Ca8Uvf:Wszln-=xdbaQD#');
define('NONCE_KEY',        '#pm2M;U{uC-jZd-c{,Q!{x@5qM-fEsdK#xjU>()^hZ(7#soR2|il}HnjmaOd0HK(');
define('AUTH_SALT',        ']z?4Fy,[`h zH_xU*N{}K7gwH2qZV~YCj6I5~860Va!DhdWM;lFg* B]QHp(Kd)l');
define('SECURE_AUTH_SALT', 'Zy(Rsi>_%7$4<bIB/FcPsv4]1uoJaj0uJT=n3d*AM7&DFz:9z-PQN%}AGV7H@zHr');
define('LOGGED_IN_SALT',   'h;%@R|h)PM3gHO[ eEM_wd $0&Hk t:GG><)w?5l{AiaUJn=XDD2AZXjgae[hl~4');
define('NONCE_SALT',       'a{IR=J6COge$_K&G.]px%k@k86!0aw-E1~R9~?yv/cVd1y6xp `72@|Dwu)R%:%O');

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
