<?php
/**
 * The functions.php file for the Hillcrest theme.
 *
 * @since Hillcrest 1.0
 */

 register_sidebar( array(	
		    'name'          => 'Hero',
		    'description'   => 'Sidebar area for the front page hero banner.',
		    'id'            => 'hero'
		) );
register_sidebar( array(	
		    'name'          => 'Left Sidebar',
		    'description'   => 'The left sidebar widet area.',
		    'id'            => 'sidebar'
		) );
register_sidebar( array(	
		    'name'          => 'Footer',
		    'description'   => 'Footer area content',
		    'id'            => 'footer'
		) );

 require_once(get_template_directory() . '/class-wp-bootstrap-navwalker.php');

 add_action( 'after_setup_theme', 'wpt_setup' );
     if ( ! function_exists( 'wpt_setup' ) ):
         function wpt_setup() {  
         register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
     } endif;

 register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'behavioral-play-therapy' ),
) );
?>