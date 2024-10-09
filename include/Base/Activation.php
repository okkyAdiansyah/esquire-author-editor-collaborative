<?php
/**
 * Handle service activation upon plugin activation
 * 
 * @package Esquire Live Collaborative
 */
namespace Esq\Base;

class Activation {
    /**
     * Activate action on plugin activation
     * 
     * @return void return nothing if all requirement is met
     * @return WP_Error return WP error object if requirement isn't met
     */
    public static function elc_activate_plugin(){
        do_action( 'wp_enqueue_scripts',  array(__CLASS__, 'elc_enqueued_script'));
        do_action( 'wp_enqueue_scripts',  array(__CLASS__, 'elc_enqueued_style'));
    }

    /**
     * Enqueued styles and script
     * 
     * @return WP_Error return WP error object if styles or script isn't exist
     */
    private static function elc_enqueued_script(){
        wp_enqueue_script( 
            'script', 
            plugin_dir_path( __FILE__ ) . "/assets/script/script.js", 
            array('jQuery'), 
            false 
        );
    }

    private static function elc_enqueued_style(){
        wp_enqueue_style( 
            'style', 
            plugin_dir_path( __FILE__ ) . '/assets/css/style.css',
            false
        );
    }

}