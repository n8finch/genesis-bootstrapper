<?php
/*
Plugin Name: Genesis Bootstrapper
Plugin URI: http://www.finchproservices.com
Description: This is a simple plugin that will enque Bootstrap to your Genesis WordPress site.
Author: Nate Finch
Version: 1.0
Author URI: http://www.finchproservices.com
*/

function n8f_get_bootstrap() {
 
    wp_enqueue_style('n8f-styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', __FILE__ ) );
    wp_enqueue_script( 'n8f-scripts', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array( 'jquery' ), '1.0' );
    
}

add_action( 'wp_enqueue_scripts', 'n8f_get_bootstrap' );