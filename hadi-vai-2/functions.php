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




function mytext(){
    
add_shortcode( 'myform', function(){

    ob_start();
        ?>

<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12 ">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Department</li>
												<li data-value="2" class="option">Cardiac Clinic</li>
												<li data-value="3" class="option">Neurology</li>
												<li data-value="4" class="option">Dentistry</li>
												<li data-value="5" class="option">Gastroenterology</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Akther Hossain</li>
												<li data-value="3" class="option">Dr. Dery Alex</li>
												<li data-value="4" class="option">Dr. Jovis Karon</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>


<?php

return ob_get_clean();
} );
}


add_action('init','mytext');


//Create a top label menu
add_action('admin_menu','sh_top_lebel_menu');
if(!function_exists('sh_top_lebel_menu')){
	function sh_top_lebel_menu(){
		add_menu_page(
			'Cell numer Your', //title
			'All Section Dynamic option', //menu title
			'manage_options', //capability
			'wporg', // slug
			'sh_top_lebel_menu_callback', //callback
			'dashicons-performance', //dashicons
			30 //menu position

		);

		add_submenu_page(
			'wporg',//parent slug
			'Heading and About Title section',//submenu title
			'Heading and About Menu Title section',//Menu title
			'manage_options', //capability
			'about_section_slug', //slug
			'sh_submenu_lebel_menu_callback'//callback 
		);
		
	}

	/*===========================
	* Menu All calback function
	============================*/
	// Top label menu cb
	function sh_top_lebel_menu_callback(){
		echo "Enter your all data step by step";
	}
//Submenu cb
	function sh_submenu_lebel_menu_callback(){
		?>
		<h3><?php echo get_admin_page_title();?></h3>
		<form action="options.php" method="post">
		<?php
	settings_fields('custom_settings_group');
	do_settings_sections('custom-settings');
	submit_button(__('save setting','textdomain'));
		?>
		</form>
		<?php
	}
}

/*
*Register "custom_setting_init" to the "admin_init" action hooks
*/
add_action('admin_init','custom_setting_init');
function custom_setting_init(){
	//Registered a new setting for custom-settings page
register_setting( 'custom_settings_group','age' );
register_setting( 'custom_settings_group','cell' );
register_setting( 'custom_settings_group','gmail' );
register_setting( 'custom_settings_group','about_title' );
register_setting( 'custom_settings_group','we_offer_title' );
/*==============================================
*Registered all section in "custom-setting "page
=================================================*/
//1.Registered section in "custom-setting"
add_settings_section( 
	'custom_setting_section',
	'Custom setting section',
	'custom_setting_section_callback',//calback
	'custom-settings',//page name
);
//2.Registered section in 'custom-setting'
add_settings_section( 
	'custom_setting_section_2',
	'Title for "who offer"',
	'custom_setting_section_callback_2',//calback
	'custom-settings',//page name
);
/*=========================================================================
*register  new field in the "custom_setting_section" inside "custom-setting" page
=========================================================================*/
//1.field for age
add_settings_field( 
	'custom_text_field', //field id
	'Enter Your Birthsay date', //field title
	'custom_age_field_callback', //callback
	'custom-settings', //page
	'custom_setting_section',//parent section id
);
//2.field for cell
add_settings_field( 
	'custom_text_fields', //field id
	'Enter Your cell number', //field title
	'custom_cell_field_callbacks', //callback
	'custom-settings', //page
	'custom_setting_section',//parent section id
);
//3.field for gmail
add_settings_field( 
	'custom_text_fields_gmail', //field id
	'Enter Your gmail', //field title
	'custom_gmail_field_callbacks', //callback
	'custom-settings', //page
	'custom_setting_section',//parent section id
);
//4.Field for About title
add_settings_field( 
	'custom_text_fields_about_title', //field id
	'Enter Your About Main Title', //field title
	'custom_main_title_field_callbacks', //callback
	'custom-settings', //page
	'custom_setting_section',//parent section id
);
/*=========================================================================
*register  new field in the "custom_setting_section_2" inside "custom-setting" page
=========================================================================*/
//1.field for main title
add_settings_field( 
	'custom_text_fields_section_2_title', //field id
	'Enter Your Main Title', //field title
	'custom_main_title_field_callback_section_2', //callback
	'custom-settings', //page
	'custom_setting_section_2',//parent section id
);
}


/*========================
*Section content all cb
============================*/
//1.section cb
function custom_setting_section_callback(){
	echo "Enter your cell number";
}
//2.Section content cb
function custom_setting_section_callback_2(){
	echo "Enter for Who Offer area";
}
/*====================================
*All field content from section=>1
==================================*/
//1.field content cb
function custom_age_field_callback(){
	$for_age=get_option('age');
	?>
	<input type="date" name='age' value="<?php echo esc_html($for_age)?>">
	<?php

	//php function for date collect 3
$from = new DateTime($for_age);
$to   = new DateTime('today');
echo $from->diff($to)->y;


// $from=new DateTime();

# procedural
// echo date_diff(date_create('1970-02-01'), date_create('today'))->y; 


}
//2.field content cb
function custom_cell_field_callbacks(){
	$for_cell=get_option('cell');
	?>
	<input type="text" name='cell' value="<?php echo esc_html($for_cell);?>">
	<?php
}
//3.field content cb
function custom_gmail_field_callbacks(){
	$for_gmail=get_option('gmail');
	?>
	<input type="email" name='gmail' value="<?php echo esc_html($for_gmail);?>">
	<?php
}
//4.field content cb
function custom_main_title_field_callbacks(){
	$for_about_title=get_option('about_title');
	?>
	<input type="text" name='about_title' value="<?php echo esc_html($for_about_title);?>">
	<?php
}
/*====================================
*All field content from section=>2
==================================*/
function custom_main_title_field_callback_section_2(){
	$we_offer_title=get_option('we_offer_title');
	?>
	<input type="text" name='we_offer_title' value="<?php echo esc_html($we_offer_title);?>">
	<?php
}



//create a sidebar widget

function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'About Area', 'theme_name' ),
		'id'            => 'footer-about-1',
		'before_widget' => '<div class="hi">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '<h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Quick Links', 'theme_name' ),
		'id'            => 'footer_links_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p>',
		'after_title'   => '<p>',
	) );

}
add_action('after_setup_theme','themename_widgets_init');

?>