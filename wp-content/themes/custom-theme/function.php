<?php
// Register navigation menu
function ongrid_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Top Menu', 'ongrid') // 'ongrid' is your theme textdomain
        )
    );
}
add_action('after_setup_theme', 'ongrid_register_menus');
?>
