<?php

/**
 * VMTASK3
 *
 * @author Carson Fujita
 * @copyright 2026 Carson Fujita
 * @license MIT
 *
 * @version 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: VMTASK3
 * Plugin URI: https://github.com/TheFujirose/vmtask3
 * Description: Implementation of WooCommerce functionalities within a website builder section of Elementor.
 * Version: 1.0.0
 * Requires at least: 6.9
 * Requires PHP: 8.2
 * Author: Carson Fujita
 * License: MIT
 * License URI: https://github.com/TheFujirose/vmtask3/blob/main/README.md
 * Requires Plugins: WooCommerce Elementor
 */

namespace Product_Placement;

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Main class
 */
final class Product_Placement
{
    /**
     * Plugin Version
     *
     * @since 1.0.0
     *
     * @var string The plugin version.
     */
    const VERSION = '1.2.1';

    /**
     * Minimum Elementor Version
     *
     * @since 1.2.0
     *
     * @var string Minimum Elementor version required to run the plugin.
     */
    const MINIMUM_ELEMENTOR_VERSION = '3.3.5';

    /**
     * Minimum PHP Version
     *
     * @since 1.2.0
     *
     * @var string Minimum PHP version required to run the plugin.
     */
    const MINIMUM_PHP_VERSION = '7.0';

    /**
     * Constructor
     *
     * @since 1.0.0
     */
    public function __construct()
    {

        // Init Plugin
        add_action('plugins_loaded', [$this, 'init']);
    }

    /**
     * Initialize the plugin
     *
     * Validates that Elementor is already loaded.
     * Checks for basic plugin requirements, if one check fail don't continue,
     * if all check have passed include the plugin class.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 1.2.0
     */
    public function init(): void
    {

        // Check if Elementor installed and activated
        if (! did_action('elementor/loaded')) {
            add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);

            return;
        }

        // Check for required Elementor version
        if (! version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);

            return;
        }

        // Check for required PHP version
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);

            return;
        }

        // Once we get here, We have passed all validation checks so we can safely include our plugin
        require_once 'plugin.php';
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have Elementor installed or activated.
     *
     * @since 1.0.0
     */
    public function admin_notice_missing_main_plugin(): void
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
            esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'elementor-hello-world'),
            '<strong>'.esc_html__('Elementor Hello World', 'elementor-hello-world').'</strong>',
            '<strong>'.esc_html__('Elementor', 'elementor-hello-world').'</strong>'
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required Elementor version.
     *
     * @since 1.0.0
     */
    public function admin_notice_minimum_elementor_version(): void
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-hello-world'),
            '<strong>'.esc_html__('Elementor Hello World', 'elementor-hello-world').'</strong>',
            '<strong>'.esc_html__('Elementor', 'elementor-hello-world').'</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required PHP version.
     *
     * @since 1.0.0
     */
    public function admin_notice_minimum_php_version(): void
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }

        $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-hello-world'),
            '<strong>'.esc_html__('Elementor Hello World', 'elementor-hello-world').'</strong>',
            '<strong>'.esc_html__('PHP', 'elementor-hello-world').'</strong>',
            self::MINIMUM_PHP_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }
}
// Instantiate
new Product_Placement;
