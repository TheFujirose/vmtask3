<?php

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Product Placement Widget
 *
 * This widget communicates with WooCommerce REST API
 * It places a product
 *
 * @since 1.0.0
 */
class product_placement_widget extends \Elementor\Widget_Base
{
    /**
     * Get widget name
     *
     * @since 1.0.0
     *
     * @return string Widget name
     */
    public function get_name(): string
    {
        return 'product_placement';
    }

    /**
     * Get Widget Title
     *
     * Retrieves the widget title.
     *
     * @since 1.0.0
     */
    public function get_title(): string
    {
        return esc_html__('Product Placement', 'product-placement');
    }

    protected function render(): void
    {
        ?>
			<h2>Popup Title</h2>
			<p>This is the content of the popup.</p>
			<form method="dialog">
				<button>Close</button>
			</form>
		<?php
    }
}
