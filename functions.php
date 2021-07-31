<?php



function dnb_theme_nav(){
    $location = array(
        'primary' => 'Desktop version'
        
    );
    
    register_nav_menus($location);
}

add_action( 'init', 'dnb_theme_nav' );

// dynamic title tag
	/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
function dnb_theme_support(){
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'dnb_theme_support' );



function dnb_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style("dnb-bootstap", get_template_directory_uri() . "/assets/css/bootstrap-grid.min.css", array(), "1.0", "all");
    wp_enqueue_style("dnb-style", get_template_directory_uri() . "/style.css", array(), $version, "all");
    wp_enqueue_style("dnb-responsive", get_template_directory_uri() . "/assets/css/responsive.css", array(), $version, "all");

}

add_action("wp_enqueue_scripts", "dnb_register_styles");


function dnb_register_script(){
    wp_enqueue_script("dnb-fontawesome", get_template_directory_uri() . "/assets/js/font_awesome.js", array(), "1.0", "all");
    wp_enqueue_script("dnb-jquery", get_template_directory_uri() . "/assets/js/jquery.min.js", array(), "1.0", "all");
    wp_enqueue_script("dnb-script", get_template_directory_uri() . "/assets/js/script.js", array(), "1.0", "all");

}

add_action("wp_enqueue_scripts", "dnb_register_script");


?>