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



if(!function_exists('myform')){
	function myform(){
		function ourform(){
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
		}
		add_shortcode('form','ourform');
	}
}
add_action( 'init','myform');


//Top label menu
if (!function_exists('sh_top_menu')) {
    function sh_top_menu() {
        add_menu_page(
            'Submit your Page Title', // page title
            'Submit your data', // menu title
            'manage_options', // capability
            'top_menu_slug', // slug
            'sh_top_callback', // callback function
            'dashicons-games', // dashicon
            20
        );
    }

	function sh_top_callback(){
		?>
		<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
		<form action="options.php" method="post">
			<?php 
			settings_fields('option_group');
			do_settings_sections('custome_sections_name');
			submit_button(__('save data','textdomain'));
			?>
		</form>
		<?php
	}
}

add_action('admin_menu', 'sh_top_menu');


function option_group_function(){
	//Registration waith database
	register_setting('option_group','input_data');
	//Add sections
	add_settings_section(
		'section_id', //section id
		'Your all data', //section title
		'custom_setting_callback', //callback
		'custome_sections_name', //custom section page name
	);
	//add section field
	add_settings_field(
		'add_field_id', //field id
		'Enter Your sell Number', //field title
		'sh_field_callback', //callcack
		'custome_sections_name', //page
		'section_id',
	);

}
add_action('admin_init','option_group_function');

function custom_setting_callback(){
	echo "Enter your all data";
}

function sh_field_callback(){
	?>
	<input type="text" name="input_data" value="<?php echo get_option('input_data');?>">
	<?php
}

?>