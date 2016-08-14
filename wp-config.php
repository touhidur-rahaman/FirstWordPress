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
define('DB_NAME', 'Wordpressdb');

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
define('AUTH_KEY',         'i.hQ/vGf52hZX8FqyUuOiv ]KwN?AP1Ruy@(ab5MkNR,wS>pyUr>2#8HA+2!`*!<');
define('SECURE_AUTH_KEY',  'QA1{>Px3Ffl7nJ)d9/GC,]XU5`kT]BLaYJ@NfPY_s##,nA/R0+(/!6RcZU|jLpQN');
define('LOGGED_IN_KEY',    'f_wQIK]0B#*u?Wvm89U]DG<BYFrH]1ZNH._V0My#qKwY(UL;d!2>x@1Q|C.<5d51');
define('NONCE_KEY',        '%k&l4&<,;3n@[-gB-8nhtAsx%mA|l0H4C>$]?8aDhrsG9O9a[{09:MAe:B_n6*Ie');
define('AUTH_SALT',        'u(b5Wj:}om}4c 45S;tvT:`UMLk7bwMFE0jS/E97HmJl>Z~]ewDsY@gxi$1f8xUz');
define('SECURE_AUTH_SALT', '%!FZ4L}^x<tZ3EC4~|;Ms[8.!0cl ]QY69wKD4dy&3pJ*/M,#wyYNt&Tf,s$qxn+');
define('LOGGED_IN_SALT',   ',U@e#$]TmJ-$`_5pwL$#`Z!fm(3v$#Q^5;v#Y4Va%4V8^<huUFQ$B C T1xd$SBU');
define('NONCE_SALT',       'n50So>V KKQfzxmV}o/YZ}L`E{$+M&!QLZYTe*-%2h,,*(>_9``[U}:40TBgLb7)');

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
