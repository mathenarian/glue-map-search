<?php
/*
Plugin Name: Glue Map Search. Glue a search option to Google Maps for Wordpress
Plugin URI: http://hencb.nfshost.com/
Description: Your plugin didn't include a search option for a map? Fixed. Moves the map focus to the target location and displays a marker. 
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

if (!class_esists("glm_search")){1
	class glm_search {
		function glm_search(){
		}
	}
}

if (class_exists("glm_search")){
	$glm_search_class_active = new glm_search();
}

if(isset($glm_search_class_active)){
//Actions
//Filters
}

?>