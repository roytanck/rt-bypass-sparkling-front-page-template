<?php
/**
 * Plugin Name: RT Bypass Sparkling Front Page Template
 * Plugin URI: http://www.this-play.nl
 * Description: When activated, disables the front-page.php template in the Sparkling theme.
 * Version: 1.0
 * Author: Roy Tanck
 * Author URI: http://www.roytanck.com
 * License: GPL2
 */


function rt_bypass_sparkling_front_page_template( $template ) {

	if( is_front_page() && 'page' == get_option( 'show_on_front' )  ) {
		$new_template = locate_template( array( 'page.php' ) );
		if ( '' != $new_template ) {
			return $new_template ;
		}
	}

	return $template;
}

add_filter( 'template_include', 'rt_bypass_sparkling_front_page_template', 99 );

?>