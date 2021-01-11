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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TkCmh1DcMIzdr8aankAqCWUFUNLnWj64DyCqXj2P+t4nc9EETLDAGjByVhUmwbSPDKf6hTltoH+zH2fxTAZXsg==');
define('SECURE_AUTH_KEY',  'lMa/REjeReWd9p4IXdiqPfnv2iX57l+w6WZndshyMgSdMEpWJXwUNNWtVc4X7jRxWWeaUWGD9p+qfDxtDf3Kkg==');
define('LOGGED_IN_KEY',    'E8wAo38d70Zx+05mVRdrDuJ6+46yvU8wuzRTEFipo2yP45+Lts5BbLPtWO/332++yXHalCb96hhWVqvbbH043Q==');
define('NONCE_KEY',        'sZegtzZLofZfyD/inRyhL1/WDHnsVE2YsstjOSgxOWH9R4jNYXrqTAethrKv4bCnRwKQRuwcPsVA3c6QIi3Tzg==');
define('AUTH_SALT',        'ekF/3/4Kk3mV73ByH5TDalL/PGXvKc8GMIX/zd103DBC27u3vmBB/zy8nJD2m+QkZzfU0AazG7r+LgufJaVsGw==');
define('SECURE_AUTH_SALT', 'SqmBopnFJhh+Y8ut5ZrNS0Xbe9W8uj7wUrB+fwElG9wJmDYCAeDUik6RFcAyJ6tdwmMdisd2g0ywIDcPASyDpg==');
define('LOGGED_IN_SALT',   '4x/wSMmdWoVnzQJD5lj8emVdgkG1tSqtbgZw2SdFD4IY2JfAc3FDbvBL7EeGca8LdlY2Z4RyDLZJv/2sFzXR3A==');
define('NONCE_SALT',       '6iL5BP20FBeMsghY/IK/9xo8U4y5+jyl8/g/TaVPwX82gZhKDzd4IPDT/HZOyYp2We/YutWJRgWDUT7keUELng==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
