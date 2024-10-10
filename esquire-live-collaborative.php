<?php
/**
 * Plugin Name: Esquire Live Collaborative
 * Version: 1.0
 * Author: Okky Adiansyah
 * Description: Saved the current edited draft before publishing, show which part that has been edited by the author, documented every changes made into the article to help on any legal action, enable live editing functionality and centralize publishing workflow into Author-Editor Collaborative Platform 
 */

if(! defined('ABSPATH')){
    die;
}

//  include autoload
if(file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' )){
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use Esq\Base\Activation;
use Esq\PluginInit;

register_activation_hook( __FILE__, array('Esq\Base\Activation', 'elc_activate_plugin') );

$plugin = new PluginInit();
$plugin->elc_plugin_init();