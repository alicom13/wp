<?php
/**
 * 1. Removing dashboard widgets.
 * @link https://developer.wordpress.org/reference/functions/remove_meta_box/
 */
add_action('wp_dashboard_setup', 'mwp_remove_dashwidgets');
function mwp_remove_dashwidgets() {
        // Selamat Datang
        remove_action( 'welcome_panel', 'wp_welcome_panel' );
        // Status Kesehatan Situs
        remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
        // Selayang Pandang
        // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        // Aktivitas
        // remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
        // Acara dab Berita Wordpress
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        // Draft Cepat
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    }

/**
 * 2. Custom dashboard widgets.
 * @link https://developer.wordpress.org/reference/functions/remove_meta_box/
 */
add_action('wp_dashboard_setup', 'mwp_dasbor_widgets', 999);
function mwp_dasbor_widgets() {
    wp_add_dashboard_widget(
        'mwp_help', // Widget slug
        'MWP Help', // Widget title
        'mwp_help_content' // Callback function which renders the content
    );
}
// Widget content
function mwp_help_content() {
   echo '<p>Welcome to Your Blog!<br>
   Need help?
   Contact the developer <a href="mailto:aliyunet@gmail.com">here</a>.<br>
   For WordPress Tutorials visit: <a target="_blank" href="https://waliweb.com" target="_blank">Waliweb.com</a></p>';

}
