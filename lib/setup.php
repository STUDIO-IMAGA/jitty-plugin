<?

namespace Jitty\Plugin\Setup;

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'jitty/prijslijst-tabs', $plugin_url . 'assets/prijslijsten.css' );
    wp_enqueue_style( 'jitty/off-canvas-menus', $plugin_url . 'assets/mobielmenu.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );
