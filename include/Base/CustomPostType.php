<?php
/**
 * Custom post type register
 * 
 * @package Esquire Live Collaborative
 */
namespace Esq\Base;

class CustomPostType {
    /**
     * Registering custom post type
     * 
     * @param string $post_type Post type identifier
     * @param array $settings Optional settings array for post type
     *                        Default empty array
     * @param array $labels Post type label name and singular name
     *                      Default empty array
     * 
     * @return void
     */
    public function elc_register_custom_post_type( $post_type, $settings = [], $labels = [] ){
        /**
         * @var array $default_labels Default labels for post type
         */
        $default_labels = array(
            'name' => $labels['name'] ?? ucfirst($post_type) . 's',
            'singular_name' => $labels['singular_name'] ?? ucfirst($post_type)
        );
        
        /**
         * @var array $default_settings Default settings for post type
         */
        $default_settings = array(
            'public' => true,
            'labels' => array_merge( $default_labels, $labels ),
            'has_archive' => true,
            'show_in_rest' => true
        );

        register_post_type( 
            $post_type, 
            array_merge( $default_settings, $settings ) 
        );
    }
}
