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
define('DB_NAME', 'ricohzon_wp210');

/** MySQL database username */
define('DB_USER', 'ricohzon_wp210');

/** MySQL database password */
define('DB_PASSWORD', 'bSpq6Z])24');

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
define('AUTH_KEY',         'stx6g0ozu8xvzi3tzva7vaohaweclrnica8rex4okqhmesllksndaig8xdkaz9ch');
define('SECURE_AUTH_KEY',  'eorqzhlwo53bhxlv447wdgulnwno9yaaermkd6bwskg0ao9rozs9m5vcahekv6lx');
define('LOGGED_IN_KEY',    'b7vq5otko0zv278pr2gr69ritpoduvnf8v4h5yko4sui8rodawouphnto83rba7z');
define('NONCE_KEY',        'dtcfx82735cse8keldclkbwwyojpvdvpwa4mmqcof9wxq0o3nvfrfv4so685zcry');
define('AUTH_SALT',        'ljysuww9ir6np9o5jlgn4nybsdgiamgigd79yifoewvkvouwee9sgylymdp8klrx');
define('SECURE_AUTH_SALT', '2ljtozhxvjjsbm7fqagwrcrwivamrkozc0t8jmkrpoxe308jo0mjc9poys7xx9ol');
define('LOGGED_IN_SALT',   'c7cjcimgyrrxos9igqur2uakueuoukzfmywnblklxpnwikavasuoza7fayddfxjl');
define('NONCE_SALT',       'acw41mxbplbxf1h9dabqkctqsfixqjigqftthzvpgzoevor7jm5yxantmwxaqm48');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpw4_';

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
