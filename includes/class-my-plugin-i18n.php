<?php
/**
 * Created by PhpStorm.
 * User: ma.saeedi
 * Date: 4/22/2018
 * Time: 17:24 AM
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    My_Plugin
 * @subpackage My_Plugin/includes
 * @author     Mahdi Saeedi <mahdi.saeedi@hotmail.com>
 */
class My_Plugin_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'my-plugin',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );

    }


}
