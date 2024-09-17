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

function ourshortcodeform(){

    add_shortcode( 'form',function(){
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
    });
}
add_action('init','ourshortcodeform');



/*==================================
* Create a custom top label menu
=================================*/
add_action('admin_menu','sh_data');
function sh_data(){
	add_menu_page(
		'Give me your Data', //page title
		'Personal Data', //Menu title
		'manage_options', //capability
		'personal_data_slug', //slug
		'personal_data_input', //callback function
		'dashicons-admin-users', //dashicons
		50 //menu position
	);
	function personal_data_input(){
		?>
		<h2><?php echo get_admin_page_title();?></h2>
		<form action="options.php" method="post">
		<?php
		settings_fields('custom_settings_group');
		do_settings_sections('custom_setting_section');
		submit_button(__('Save data','textdomain'));
		?>
		</form>
		<?php
	}
	
}

//Register sh_data_collect_area to admin_init action hook
add_action('admin_init','sh_data_collect_area');
function sh_data_collect_area(){
	//Register a setting for top_lebel_menu=>Personal Data
	register_setting( 'custom_settings_group', 'cell');
	register_setting( 'custom_settings_group', 'age');
	//Register a new section in personal data page
	add_settings_section( 
		'sh_settinng_section_text',//section id
		'Give Your Personal data', //section title
		'sh_section_callback_function', //callback function
		'custom_setting_section', //section page name
 );
 //Register a new field in personal data page
 add_settings_field( 
	'sh_setting_fieldid',// field id
	 'Enter your cell', //field title
	 'sh_field_callback_function', //field callback function 
	 'custom_setting_section', //field callback
	  'sh_settinng_section_text', //section id
);
 add_settings_field( 
	'sh_setting_fieldid_age',// field id
	 'Enter your age', //field title
	 'sh_age_field_callback_function', //field callback function 
	 'custom_setting_section', //field callback
	  'sh_settinng_section_text', //section id
);
}

/*=====================
* Callback functions
=====================*/
// Section content cb
function sh_section_callback_function(){
	echo "Section introduction";
}

// Field content cb for cell
function sh_field_callback_function(){
	?>
	<input type="text" name="cell" id="cellnumber" value="<?php echo get_option('cell')?>">
	<?php
}
//field content cb for age
function sh_age_field_callback_function(){
	?>
	<input type="text" name="age" id="agenumber" value="<?php echo get_option('age')?>">
	<?php
}

require get_template_directory() . "/inc/customize/mythemecustomize.php";



?>
