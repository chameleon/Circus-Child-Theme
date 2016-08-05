<?php

// The new functions will be loaded right BEFORE the parent theme’s functions. Your child theme’s functions.php file should start with a php opening tag and end with a php closing tag.  PHP files are edited by replacing the file entirely with a new one. The theme’s original file is ignored and the new one is used instead. 
/*
call the parent theme's css
*/
function circus_enqueue_styles() {

    //$parent_style = 'parent-root-style';
	//need to enqueue the parent's style.css since it is not enqueued in parent-
    wp_enqueue_style( 'parent-root-style', get_template_directory_uri() . '/style.css' );
    
    //just load the child root's style.css as normal with enqueue (WP normal- no linking)
    //dependency order matters-- they are imported into the page in this order.
    //these dependencies are called by name given in parent theme's function.php BUT...
    //this child function.php runs before the parent's! via WP engine., & unlike css.
    wp_enqueue_style( 'child-root-style', get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-root-style', 'bootstrapcss', 'robotoStyle', 'iconicStyle', 'myStyle')
    );


}
add_action( 'wp_enqueue_scripts', 'circus_enqueue_styles' );




?>