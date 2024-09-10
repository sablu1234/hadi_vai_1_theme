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




require get_template_directory(  )."/cmb/init.php";
require get_template_directory(  )."/cmb/mymeta.php";

// Code Star Frame work
require_once get_theme_file_path() .'/inc/codestar/codestar-framework.php';
require_once get_theme_file_path() .'/inc/codestar/samples/admin.php';



function mytext(){
	add_shortcode( 'myform',function(){
		ob_start();
		?>
			<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
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



// 1. Add custom settings page to the admin menu
function custom_settings_page() {
    add_menu_page(
        'Custom Settings title',
        'Custom Settings',
        'manage_options',
        'custom-settings_slug',
        'custom_settings_page_html',
        'dashicons-admin-generic',
        100
    );
}
add_action('admin_menu', 'custom_settings_page');

// 2. Render the settings page
function custom_settings_page_html() {
    // if (!current_user_can('manage_options')) {
    //     return;
    // }
    ?>
    <div class="wrap">
        <h1>Custom Settings Page</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('custom_settings_group');
            do_settings_sections('custom-settings');
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

// 3. Register settings, section, and field
function custom_settings_init() {
    register_setting('custom_settings_group', 'cell');

    add_settings_section(
        'custom_settings_section',
        'Custom Settings Section',
        'custom_settings_section_callback',
        'custom-settings'
    );

    add_settings_field(
        'custom_text_field',
        'Ennter Your Cell',
        'custom_text_field_callback',
        'custom-settings',
        'custom_settings_section'
    );
}
add_action('admin_init', 'custom_settings_init');



// function mythemeoption(){
// 	register_setting('mytheme','cell');
	

// }


// add_action('admin_init','mythemeoption');





// 4. Section description
function custom_settings_section_callback() {
    echo '<p>Enter your settings below:</p>';
}

// 5. Render the field
function custom_text_field_callback() {
    $option = get_option('cell');
    ?>
    <input type="text" name="cell" value="<?php echo esc_attr($option); ?>" />
    <?php
}





?>


