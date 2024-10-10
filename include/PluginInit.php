<?php
/**
 * Plugin services initiation
 * 
 * @package Esquire Live Collaborative
 */
namespace Esq;

use Esq\Services\WorkflowPostManager;

class PluginInit {

    /**
     * Initialize plugin service
     * 
     * @return void
     */
    public function elc_plugin_init(){
        $workflow_post_manager = new WorkflowPostManager();
    }
}