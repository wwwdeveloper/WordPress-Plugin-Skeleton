<?php

/**
 * The public-facing functionality of the plugin.
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    My_Plugin
 * @subpackage My_Plugin/public
 * @author     Mahdi Saeedi <mahdi.saeedi@hotmail.com>
 */
class My_Plugin_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $my_plugin The ID of this plugin.
     */
    private $my_plugin;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $my_plugin The name of the plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($my_plugin, $version)
    {

        $this->my_plugin = $my_plugin;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in My_Plugin_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The My_Plugin_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->my_plugin, plugin_dir_url(__FILE__) . 'css/my-plugin-public.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in My_Plugin_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The My_Plugin_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->my_plugin, plugin_dir_url(__FILE__) . 'js/my-plugin-public.js', array('jquery'), $this->version, false);

    }

}
