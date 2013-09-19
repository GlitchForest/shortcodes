<?php
   /*
   Plugin Name: Shortcodes
   Plugin URI: http://glitchforest.us/
   Description: shortcodes
   Version: 1.0
   Author: Sumer
   Author URI: http://ximm.us
   */


/*All styles for shortcodes will be handled by this stylesheet*/
add_action( 'wp_enqueue_scripts', 'shortcodes_add_my_stylesheet' );

function shortcodes_add_my_stylesheet() {
        wp_register_style( 
          'shortcodes-style', 
          plugin_dir_url(__FILE__) . 'shortcodes-style.css', 
          array()
        );
        wp_enqueue_style( 'shortcodes-style' );
    } 

/*----------------------------Shortcodes-----------------------------------------*/

//myshortcode
include_once('php/my-shortcode.php');