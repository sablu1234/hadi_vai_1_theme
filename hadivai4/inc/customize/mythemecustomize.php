<?php
if(!function_exists('custommythemeoption')){
function custommythemeoption($wp_customize){
    $wp_customize->add_panel(
        'theme_panel_id',
        array(
            'title'=>__('Theme OPtion','textdomain'),
            'priority'=>30
        ),
    );
$wp_customize->add_section(
    'theme_section_id',
    array(
        'title'=>__("slider section",'text-domain'),
        'priority'=>30,
        'panel'=>'theme_panel_id'
    ),
);
$wp_customize->add_setting(
    'theme_setting_id',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);
$wp_customize->add_control(new WP_Customize_control(
    $wp_customize,
    'theme_control_id',
    array(
        'label'=>__('Enter Your About section Title','textdomain'),
        'description'=>__('description','textdomain'),
        'section'=>'theme_section_id',
        'settings'=>'theme_setting_id',
        'type'=>'text'
    ),
));

$wp_customize->add_setting(
    'theme_setting_two',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);

$wp_customize->add_control(new WP_Customize_control(
    $wp_customize,
    'theme_control_two',
    array(
        'label'=>__('Enter Description name','textdomain'),
        'description'=>__('description','textdomain'),
        'section'=>'theme_section_id',
        'settings'=>'theme_setting_two',
        'type'=>'text'
    ),
));
//call cm
$wp_customize->add_setting(
    'theme_setting_cm',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);

$wp_customize->add_control(new WP_Customize_control(
    $wp_customize,
    'theme_control_cm',
    array(
        'label'=>__('Enter url','textdomain'),
        'description'=>__('enter your url name','textdomain'),
        'section'=>'theme_section_id',
        'settings'=>'theme_setting_cm',
        'type'=>'text'
    ),
));
//Banner setting
$wp_customize->add_setting(
    'theme_setting_banner',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);

$wp_customize->add_control(new WP_Customize_image_control(
    $wp_customize,
    'theme_control_banner',
    array(
        'label'=>__('upload your image','textdomain'),
        'description'=>__('upload image','textdomain'),
        'section'=>'theme_section_id',
        'settings'=>'theme_setting_banner',
        
    ),
));
//add section 2
$wp_customize->add_section(
    'theme_section_2',
    array(
        'title'=>__("slider section 2",'text-domain'),
        'priority'=>30,
        'panel'=>'theme_panel_id'
    ),
);
$wp_customize->add_setting(
    'theme_setting_2',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);
$wp_customize->add_control(new WP_Customize_control(
    $wp_customize,
    'theme_control_2',
    array(
        'label'=>__('Enter Your About section Title','textdomain'),
        'description'=>__('description','textdomain'),
        'section'=>'theme_section_2',
        'settings'=>'theme_setting_2',
        'type'=>'text'
    ),
));

$wp_customize->add_setting(
    'theme_setting_three',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);

$wp_customize->add_control(new WP_Customize_control(
    $wp_customize,
    'theme_control_three',
    array(
        'label'=>__('Enter Description name','textdomain'),
        'description'=>__('description','textdomain'),
        'section'=>'theme_section_2',
        'settings'=>'theme_setting_three',
        'type'=>'text'
    ),
));
//call cm
$wp_customize->add_setting(
    'theme_setting_des',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);

$wp_customize->add_control(new WP_Customize_control(
    $wp_customize,
    'theme_control_five',
    array(
        'label'=>__('Enter url','textdomain'),
        'description'=>__('enter your url name','textdomain'),
        'section'=>'theme_section_2',
        'settings'=>'theme_setting_des',
        'type'=>'text'
    ),
));
//Banner setting
$wp_customize->add_setting(
    'theme_setting_banner2',
    array(
        'default'=>" ",
        'transport'=>'postMessage'
    ),
);

$wp_customize->add_control(new WP_Customize_image_control(
    $wp_customize,
    'theme_control_banner2',
    array(
        'label'=>__('upload your image','textdomain'),
        'description'=>__('upload image','textdomain'),
        'section'=>'theme_section_2',
        'settings'=>'theme_setting_banner2',
        
    ),
));

}
}
add_action('customize_register','custommythemeoption');



?>