<?php 
// enqueue scripts and style
add_action('wp_enqueue_scripts','mywpscript');
if(!function_exists('mywpscript')){
    function mywpscript(){


        wp_enqueue_style('themify_css',
        get_parent_theme_file_uri('assets/vendors/themify-icons/css/themify-icons.css'),
        array(),
        wp_get_theme()->get('version'),'all');

        wp_enqueue_style("johndoe_css",
        get_parent_theme_file_uri('assets/css/johndoe.css'),
        array(),
        wp_get_theme()->get('version'),'all');

        wp_enqueue_style( 'unique_id',get_stylesheet_uri());    
    }
}


require get_template_directory()."/inc/customize/mythemecustomize.php";




?>