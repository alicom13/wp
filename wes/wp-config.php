<?php
/*
 * Read more at
 * https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
*/
// WP_SITEURL : wp directory
define( 'WP_SITEURL', 'https://example.com/wordpress' );
// Dinamic
define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );
define( 'WP_SITEURL', 'https://' . $_SERVER['SERVER_NAME'] . '/path/to/wordpress' );

// Blog address (URL)
define( 'WP_HOME', 'https://example.com/wordpress' );
// or
define( 'WP_HOME', 'https://example.com' );
// or
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );
/*
WP CONTENT
*/
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/blog/wp-content' );
define( 'WP_CONTENT_URL', 'https://example/blog/wp-content' );
// Moving plugin folder
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
define( 'WP_PLUGIN_URL', 'https://example/blog/wp-content/plugins' );
define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
/*
WP THEMES
*/
$theme_root = WP_CONTENT_DIR . '/themes';
// uploads
define( 'UPLOADS', 'blog/wp-content/uploads' );
//WP_ENVIRONMENT_TYPE
define( 'WP_ENVIRONMENT_TYPE', 'staging' );
// WPLANG
define( 'WPLANG', 'jv_ID' );
define( 'WP_LANG_DIR', dirname(__FILE__) . 'wordpress/languages' );
