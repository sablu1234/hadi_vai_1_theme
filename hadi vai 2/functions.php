<?php


if(!function_exists('mymenu')){
    function mymenu(){
        register_nav_menus(

            array(
                'topmenu' => __('Top Menu hasan','textdomain'),
                'primary'=>__('Primary'),
                'footer-one'=>__('footer One'),
                'footer-two'=>__('footer Two'),
            ),
        );
    }
    
}
// function deafult supports
function thumbnail(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array( 'style','script' ) );
    add_theme_support( 'automatic-feed-links' ); 
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
add_action('after_setup_theme','thumbnail');
// function deafult supports end

add_action('init','mymenu');


// Function of Custom Post Type
if(!function_exists('myslider')){
    function myslider(){
        $labels=array(

            'name'=>__('my slider','mytextdomain'),
            'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'=>__('my slider'),
            'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        );
        register_post_type('__mamurjorit_slider',array(
            'labels'=>$labels,
            'public'=>true,
            'has_archive'=>true,
            'supports'=>array('title','excerpt'),
            'menu_icon' =>  'dashicons-admin-site',

        ));
    }

}
add_action('after_setup_theme','myslider');

// Meta Box

if(!function_exists('mymeta')){
	function mymeta(){
		add_meta_box(
			'hadi_pagla',
			'Add Icon',
			'myinputhtml',
			'__mamurjorit_slider',
		);
	}
}

if(!function_exists('myinputhtml')){
	function myinputhtml($post){
		$icon=get_post_meta($post->ID,'unique_key',true);
		?>

		<label for="addicon">Add Service Icon</label>
		<input type="text" name="add_icon" id="add_icon" value="<?php echo $icon;?>">
		<?php
	}
}

	add_action('add_meta_boxes','mymeta');

	// Meta Save
	if(!function_exists('mymetasave')){
		function mymetasave($post_id){
			update_post_meta(
				$post_id,
				'unique_key',
				$_POST['add_icon']
			);
		}
	}
	add_action('save_post','mymetasave');


// CMB2 
if(!function_exists('myprice')){
    function myprice(){
        $labels=array(

            'name'=>__('my myprice','mytextdomain'),
            'singular_name'         => _x( 'myprice', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'=>__('my myprice'),
            'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'add_new'=>__('ADD NEW'),
			'all_items'=>__('ALL'),

        );
        register_post_type('mprice',array(
            'labels'=>$labels,
            'public'=>true,
            'has_archive'=>true,
            'supports'=>array('title','excerpt'),
            'menu_icon' =>  'dashicons-admin-site',

        ));
    }

}
add_action('after_setup_theme','myprice');

require get_template_directory()."/cmb/init.php";
require get_template_directory()."/cmb/mymeta.php";

// Code Star Framwork
require_once get_theme_file_path() .'/inc/codestar/codestar-framework.php';
require_once get_theme_file_path() .'/inc/codestar/samples/admin.php';



?>