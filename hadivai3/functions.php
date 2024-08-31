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


// CMB2 
if(!function_exists('mycmb2')){
	function mycmb2(){
		$labels=array(
			'name'                  => _x( 'MY Price', 'text_domain' ),
		'singular_name'         => _x( 'My price','text_domain' ),
		'menu_name'             => __( 'My Price', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'all_items'             => __( 'Add All price', 'text_domain' ),

		);
		register_post_type('mprice',array(
			'labels'=>$labels,
			'public'=>true,
			'supports'=>array('title','excerpt'),
		));
	}
}
add_action('init','mycmb2');

require get_template_directory(  )."/cmb/init.php";
require get_template_directory(  )."/cmb/mymeta.php";
// Framework Code Star
require_once get_template_directory(  )."/inc/themeoption/codestar-framework.php";
// Code Star Sample
require_once get_template_directory(  )."/inc/themeoption/samples/mythemeoption.php";
?>