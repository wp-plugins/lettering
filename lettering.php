<?php
/*
Plugin Name: Lettering.js
Plugin URI: http://www.ramoonus.nl/wordpress/lettering/
Description: lightweight, easy to use Javascript <span> injector for radical Web Typography
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/


// Install jQuery Mobile
function rw_lettering_js() {
		// first the javascript
		wp_deregister_script('lettering'); // deregister
		wp_register_script('lettering', plugins_url('/js/jquery.lettering.js', __FILE__), array("jquery"), '0.6.1'); // re register
		wp_enqueue_script('lettering'); // load
} 
add_action('init', 'rw_lettering_js');
?>