<?php
/*
Plugin Name: Glue Map Search for Wordpress
Plugin URI: http://hencb.nfshost.com/
Description: A plugin based on the Store locator JavaScript API for Google Maps 
Version: 0.0.1
Author: Bruno Henc
Author URI: http://hencb.nfshost.com
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0-standalone.html
Text Domain: gl-map-search
Domain Path:   /lang/
*/

/* To avoid name collisions it is advisable to create a php class when creating a wordpress plugin
The next code checks that no "glm_search" class has been defined elsewhere. If glm_search is unused,
it defines and initializes the class */
//test

if (!class_esists("glm_search")){
	class glm_search {
		function glm_search(){
		}
		function glm_insert_map_shortcode(){
			return "foo and bar";
		}

		function glm_insert_map_register_shortcode(){
			add_shortcode( 'glue-map', 'glm_insert_map_shortcode' );
		}
	}
}

if (class_exists("glm_search")){
	$glm_search_class_active = new glm_search();
}

if(isset($glm_search_class_active)){
//Actions
add_action('init', glm_insert_map_register_shortcode);
//Filters
}



}



*/
?>

