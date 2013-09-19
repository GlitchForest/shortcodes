<?php
 add_shortcode('myshortcode', 'myshortcode');

 function myshortcode() {
 	//enque the javascripts
 	wp_enqueue_script('my-shortcode-scripts', plugins_url('../js/my-shortcode-scripts.js', __FILE__), array('jquery'), '1.0', true);
    //include the shortcode content
    include("my-shortcode-content.php");
}