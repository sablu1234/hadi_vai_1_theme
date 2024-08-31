<?php


if(!function_exists('mymenu')){
    function mymenu(){
        register_nav_menus(

            array(
                'topmenu' => __('Top Menu mamurjor','textdomain'),
                'primary'=>__('header-menu')
            ),
        );
    }
}


add_action('init','mymenu');


// My Slider Register

if(!function_exists('myslider')){
    function myslider(){
        $labels=array(

            'name'=>__('slider','textdomain'),
            'singular_name' => __('Product', 'textdomain'),

        );
        register_post_type('myslider',
            array(
                'labels'=>$labels,
               'public'      => true,
				'has_archive' => true,
                'menu_icon'=>'dashicons-networking',
                'supports'=>array('title','excerpt'),
            ),
        );
    }
}
add_action('init','myslider');


// Meta BOx
if(!function_exists('mymeta')){
    function mymeta(){
        add_meta_box(
            'hasan_ali',
            'Add Icon',
            'myinputhtml',
            'myslider',
        );
    }
}

if(!function_exists('myinputhtml')){
    function myinputhtml($post){
       $icon= get_post_meta($post->ID,'unique_key',true);
        ?>
        <label for="addicon">Add Service Icon</label>
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
add_action('save_post','mysavemeta');





if(!function_exists('mymetas')){
    function mymetas(){
        $labels=array(

           'name'=>__('My price','textdomain'),
            'singular_name'=>__('My price','textdomain'),
        );
        register_post_type('mprice',
            array(
                'labels'=>$labels,
               'public'      => true,
				'has_archive' => true,
                'menu_icon'=>'dashicons-networking',
                'supports'=>array('title','excerpt'),
            ),
        );
    }
}
add_action('init','mymetas');

require get_template_directory()."/cmb/init.php";
require get_template_directory()."/cmb/mymeta.php";


/*
if(!function_exists('mymeta')){
    function mymeta(){
        add_meta_box(
            'hasan',
            'ADD ICON',
            'myinputhtml',
            'myslider',
        );
    }
}

if(!function_exists('myinputhtml')){
    function myinputhtml(){
        ?>
        <label for="addicon">ADD SERVICES ICONS</label>
        <input type="text" name="add_icon" id="add_icon">
        <?php
    }
}
add_action('add_meta_boxes','mymeta');

*/
?>
