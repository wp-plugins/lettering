<?php
/*
Plugin Name: Lettering.js
Plugin URI: http://www.ramoonus.nl/wordpress/lettering/
Description: lightweight, easy to use Javascript <span> injector for radical Web Typography
Version: 0.6.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_lettering_js() {
		// first the javascript
		wp_deregister_script('lettering'); // deregister
		wp_enqueue_script('lettering', plugins_url('/js/jquery.lettering.js', __FILE__), array("jquery"), '0.6.1'); 
} 
add_action('wp_enqueue_scripts', 'rw_lettering_js');
?>