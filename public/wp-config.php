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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sharemypet' );

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
define( 'AUTH_KEY',         '^1|=h4BvT-d_DMeFp%5`nGC*-^U<}Hgj|RrK^6}j+L9lDfR ?xyB+KK}sVl;;R%d' );
define( 'SECURE_AUTH_KEY',  'K y;)*/7!J{5@.#;?Y;T`80a_hH(-zk<O?~}TJ1Ts||C*OG!`FX{=|d0c-M[r<Nw' );
define( 'LOGGED_IN_KEY',    's&~!R;tOn)*c4^,13GHy!}h,;F<>>@bW>%L(y:P0K0u>DFQ1p~YaKC f$kQW5 kb' );
define( 'NONCE_KEY',        'HUZ<vNLDW?6zG&m25pO5fHwe:tn>R=~igfiCsDEz!OWA1}BBOz)@L#[8k8.+Efws' );
define( 'AUTH_SALT',        ' .}Ra)twS;=*_3:t_ek(%QE#kUJ58MUYQ]vr@BS ,W0PA8%nF{VncD!-Va^}H&xE' );
define( 'SECURE_AUTH_SALT', 'XyM&<#m#$1/q*$HL0k[<@CC}+>zK%+hD*~lHJkU-X/. oFw6=De@IW#CW}Q-aCA`' );
define( 'LOGGED_IN_SALT',   '!VN^V!w{_=pH?n.~RL:k Xz80q6jB_VBMw)Z?fIT/2c.k]s7J>iR}taXEC^q0OSG' );
define( 'NONCE_SALT',       'iHrb@~T,sbiH`qi6M~-8Kjjl UD?7<c<zFK1Ge}k-g[rG/[]k0y=~0XXqMgb!%{m' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
