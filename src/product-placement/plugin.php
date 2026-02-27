<?php

use Elementor\Widgets_Manager;

/**
 * Register Widget.
 *
 * Include widget file and register widget class.
 *
 * @param  Widgets_Manager  $widgets_manager  Elementor widgets manager.
 *
 * @since 1.0.0
 */
function register_product_placement_widget(Widgets_Manager $widgets_manager): void
{

    require_once __DIR__.'/src/view/widget.php';

    $widgets_manager->register(new \Product_Placement_Widget);

}

function form_modal_editor_script(): void
{
    wp_register_script(
        'form-modal-js',
        plugins_url('/plugin.js', __FILE__),
        ['jquery'],
        '1.0',
        true
    );
}

function form_modal_action(): void
{
    wp_enqueue_script('form-modal-js');
}
add_action('wp_enqueue_scripts', 'form_modal_editor_script');
add_action('elementor/widgets/after_enqueue_scripts', 'form_modal_action');
add_action('elementor/widgets/register', 'register_product_placement_widget');
