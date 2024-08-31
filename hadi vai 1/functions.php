<?php


if(!function_exists('mymenu')){
    function mymenu(){
        register_nav_menus(

            array(
                'topmenu' => __('Top Menu mamurjor','textdomain'),
                'primary'=>__('primary menu')
            ),
        );
    }
}


add_action('init','mymenu');



if(!function_exists('myslider')){
    function myslider() {
        $labels=array(
            'name'          => __('hasanslider', 'textdomain'),
            'singular_name' => __('Product', 'textdomain'),
        );
        register_post_type('hasan_slider',
            array(
                'labels'      => $labels,
                    'public'      => true,
                    'has_archive' => true,
					'supports'=>array('title','excerpt'),
            ),
        );
    }
    add_action('init', 'myslider');
}

// Meta Box 
if(!function_exists('mymeta')){
	function mymeta(){
		add_meta_box(
			'hasan_vai',
			'ADD hasan Icon',
			'myinputhtml',
			'hasan_slider',
		);
	}
}

if(!function_exists('myinputhtml')){
	function myinputhtml($post){
		$icon=get_post_meta($post->ID,'unique_key',true);
		?>
		<label for="addicon">Add Hasan Services icons</label>
		<input type="text" name="add_icon" id="add_icon" value="<?php echo $icon;?>">
		<?php
	}
}
add_action('add_meta_boxes','mymeta');


if(!function_exists('mysavemeta')){
	function mysavemeta($post_id){
		update_post_meta(
			$post_id,
			'unique_key',
			$_POST['add_icon']
		);
	}
}
add_action( 'save_post','mysavemeta');

// CMB
if(!function_exists('mycmb2')){
function mycmb2(){
	$labels=array(
		'name'                  => _x( 'My Price', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'My Price', 'text_domain' ),
		'add_new'             => __( 'ADD NEW Price', 'text_domain' ),
		'all_items'             => __( 'ALL Price', 'text_domain' ),
	);
	register_post_type('mprice',array(
		'labels'=>$labels,
		'public'=>true,
		'has_archive'=>true,
		'supports'=>array('title','excerpt',),

	)	);
}
}
add_action('init','mycmb2');

// Header Slider with CMB
if(!function_exists('headerslider')){
	function headerslider(){
		add_theme_support('post-thumbnails');
		$labels=array(
			'name'                  => _x( 'Header Slider', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Header Sliders', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Header Sliders', 'text_domain' ),
		'all_items'             => __( 'All Header Sliders', 'text_domain' ),
		'add_new'             => __( 'Add New Sliders', 'text_domain' ),
		'not_found'             => __( 'No Sliders', 'text_domain' ),
		);
		register_post_type('header_slider',array(
			'labels'=>$labels,
			'public'=>true,
			'has_archive'           => true,
			'supports' => array('title', 'excerpt', 'thumbnail'),
		));
	}
}
add_action('init','headerslider');

// Header Slider with CMB-2
if(!function_exists('headerslider2')){
	function headerslider2(){
		add_theme_support('post-thumbnails');
		$labels=array(
			'name'                  => _x( 'Header Slider2', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Header Slider2', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Header Slider2', 'text_domain' ),
		'all_items'             => __( 'All Header Slider2', 'text_domain' ),
		'add_new'             => __( 'Add New Sliders', 'text_domain' ),
		'not_found'             => __( 'No Sliders', 'text_domain' ),
		);
		register_post_type('header_slider2',array(
			'labels'=>$labels,
			'public'=>true,
			'has_archive'           => true,
			'supports' => array('title', 'excerpt',),
		));
	}
}
add_action('init','headerslider2');


require get_template_directory(  )."/cmb/init.php";
//require get_template_directory(  )."/cmb/mymeta.php";

// Code Star Frame work
require_once get_theme_file_path() .'/inc/codestar/codestar-framework.php';
require_once get_theme_file_path() .'/inc/codestar/samples/admin.php';

//header slider link
require_once get_theme_file_path()."/cmb/headersliders.php";

?>


