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


/*=====================
* Top Level Menu
=====================*/
add_action( 'admin_menu', 'sh_personal_data' );
function sh_personal_data() {
    add_menu_page(
        'Personal Data', // Page title
        'Personal Data All', // Menu title
        'manage_options', // Capability
        'personal_data_slug', // Slug
        'personal_data_callback', // Callback function
        'dashicons-menu', // Dashicons
        30 // Position
    );

    add_submenu_page(
        'personal_data_slug', // Parent slug (should match the top menu slug)
        'Personal Data Form', // Page title
        'Personal Data Form', // Menu title
        'manage_options', // Capability
        'personal_data_form_slug', // Submenu slug
        'inputcall' // Callback function for the submenu
    );
}

function personal_data_callback() {
    echo '<h2>Personal Data Overview</h2>';
}

function inputcall() {
    ?>
    <h3><?php echo get_admin_page_title(); ?></h3>
    <form action="options.php" method="post">
        <?php
        settings_fields('custom_setting_group'); // Link to the custom settings group
        do_settings_sections('custom_pages'); // Custom page section
        submit_button(__('Save Data', 'textdomain'));
        ?>
    </form>
    <?php
}

/*=========================
* Register Settings
==========================*/
add_action('admin_init', 'sh_data_collect_area');
function sh_data_collect_area() {
    // Register new settings for cell and age
    register_setting('custom_setting_group', 'cell');
    register_setting('custom_setting_group', 'age');

    // Add a settings section
    add_settings_section(
        'setting_section_id', // Section ID
        'Personal Data Entry', // Section title
        'section_callback', // Callback function for section
        'custom_pages' // Page where the section is displayed
    );

    // Add Cell Number field
    add_settings_field(
        'setting_field_id_cell', // Field ID
        'Enter Your Cell Number', // Field title
        'setting_field_callback', // Callback function to display field
        'custom_pages', // Page where the field is displayed
        'setting_section_id' // Section ID where the field belongs
    );

    // Add Age field
    add_settings_field(
        'setting_field_id_age', // Field ID
        'Enter Your Age', // Field title
        'setting_age_field_callback', // Callback function to display field
        'custom_pages', // Page where the field is displayed
        'setting_section_id' // Section ID where the field belongs
    );
}

/*=========================
* Callback Functions
==========================*/
// Section callback content
function section_callback() {
    echo "Please enter your personal data below:";
}

// Field callback for cell number
function setting_field_callback() {
    ?>
    <input type="text" name="cell" id="cellnumber" value="<?php echo esc_attr(get_option('cell')); ?>">
    <?php
}

// Field callback for age
function setting_age_field_callback() {
    ?>
    <input type="text" name="age" id="agenumber" value="<?php echo esc_attr(get_option('age')); ?>">
    <?php
}








?>


