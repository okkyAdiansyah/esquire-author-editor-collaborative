<?php
/**
 * Custom post type for workflow management and approval
 * 
 * @package Esquire Live Collaborative
 */
namespace Esq\Services;

use Esq\Base\CustomPostType;

class WorkflowPostManager{
    /**
     * @var array $post_types Collection of post type
     */
    private $post_types = array(
        array(
            'post_type' => 'drafts',
            'settings' => array(
                'menu_icon' => 'dashicons-open-folder',
                'supports' => array('title', 'editor', 'author', 'thumbnail')
            ),
            'labels' => array(
                'name' => 'Drafts',
                'singular_name' => 'Drafts'
            )
        ),
        array(
            'post_type' => 'on review',
            'settings' => array(
                'menu_icon' => 'dashicons-open-folder',
                'supports' => array('title', 'editor', 'author', 'thumbnail')
            ),
            'labels' => array(
                'name' => 'On Reviews',
                'singular_name' => 'On Review'
            )
        ),
        array(
            'post_type' => 'publish',
            'settings' => array(
                'menu_icon' => 'dashicons-open-folder',
                'supports' => array('title', 'editor', 'author', 'thumbnail')
            ),
            'labels' => array(
                'name' => 'Publish',
                'singular_name' => 'Publish'
            )
        ),
    );

    public function __construct(){
        add_action( 
            'init', 
            array($this, 'elc_register_workflow_post_type'), 
            5
        );
    }

    /**
     * Registering all post types for workflow manager
     * 
     * @return void
     */
    public function elc_register_workflow_post_type(){
        /**
         * @var CustomPostType $custom_post_type Instance for CustomPostType
         */
        $custom_post_type = new CustomPostType();

        // Loop through $post_types and register it
        foreach ( $this->post_types as $post_type ) {
            $custom_post_type->elc_register_custom_post_type(
                $post_type['post_type'],
                $post_type['settings'],
                $post_type['labels']
            );
        }
    }
}