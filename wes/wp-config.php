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
