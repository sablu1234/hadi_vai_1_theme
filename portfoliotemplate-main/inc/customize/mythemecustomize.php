<?php 


if(!function_exists('custmythemeoption')){
    function custmythemeoption($wp_customize){

        // //add/get/remove
        // //panel
        // $wp_customize->add_panel();
        // $wp_customize->get_panel();
        // $wp_customize->remove_panel();

        // //section
        // $wp_customize->add_section();
        // $wp_customize->get_section();
        // $wp_customize->remove_section();

        // //control
        // $wp_customize->add_control();
        // $wp_customize->get_control();
        // $wp_customize->remove_control();

        // //setting
        // $wp_customize->add_setting();
        // $wp_customize->get_setting();
        // $wp_customize->remove_control();


        $wp_customize->add_panel(
            'theme_option_id',
            array(
                'title'=>__('Theme option','sablu_hasan',),
                'priority'=>30,
            ),
        );

//slider section
        $wp_customize->add_section(
            'theme_section_slider',
            array(
                'title'=>__('Slider Section','sablu_hasan'),
                'priority'=>30,
                'panel'=>'theme_option_id',
            ),
            );
            
        $wp_customize->add_setting(
            'theme_setting_id',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_id',
            array(
                'label'=>__('Enter Name','sablu_hasan'),
                'description'=>__('Enter your name','sablu_hasan'),
                'section'=>'theme_section_slider',
                'settings'=>'theme_setting_id',
                'type'=>'text',
            ),
        ));
//slider-section->designation
        $wp_customize->add_setting(
            'theme_setting_designation',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_designation',
            array(
                'label'=>__('Enter Name','sablu_hasan'),
                'description'=>__('Enter your name','sablu_hasan'),
                'section'=>'theme_section_slider',
                'settings'=>'theme_setting_designation',
                'type'=>'text',
            ),
        ));
//slider-section->url
        $wp_customize->add_setting(
            'theme_setting_url',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_url',
            array(
                'label'=>__('Enter your URL','sablu_hasan'),
                'description'=>__('Enter your URL','sablu_hasan'),
                'section'=>'theme_section_slider',
                'settings'=>'theme_setting_url',
                'type'=>'text',
            ),
        ));

        //slider-section->banner
        $wp_customize->add_setting(
            'theme_setting_banner',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_image_control(
            $wp_customize,
            'theme_control_banner',
            array(
                'label'=>__('Upload image','sablu_hasan'),
                'description'=>__('Upload your Image','sablu_hasan'),
                'section'=>'theme_section_slider',
                'settings'=>'theme_setting_banner',
            ),
        ));

/*================================
*Personal info ->sectin-2 start
=================================*/
//personal info section
$wp_customize->add_section(
    'theme_section_personal_info',
    array(
        'title'=>__('Personal Info','sablu_hasan'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
    );
    //personal info->who i am title
$wp_customize->add_setting(
    'theme_setting_who_i_am',
    array(
        'default' => '',
        'transport'=> 'refresh',
    ),
);

$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_who_i_am',
    array(
        'label'=>__('Enter Who I am Title','sablu_hasan'),
        'description'=>__('Enter Who I am Title','sablu_hasan'),
        'section'=>'theme_section_personal_info',
        'settings'=>'theme_setting_who_i_am',
        'type'=>'text',
    ),
));
//personal info->personal info title
$wp_customize->add_setting(
    'theme_setting_personal_info',
    array(
        'default' => '',
        'transport'=> 'refresh',
    ),
);

$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_personal_info',
    array(
        'label'=>__('Enter Personal birdthday date','sablu_hasan'),
        'description'=>__('Enter Personal birdthday date','sablu_hasan'),
        'section'=>'theme_section_personal_info',
        'settings'=>'theme_setting_personal_info',
        'type'=>'text',
    ),
));

        /*============================
        *personal info->Expertise
        ====================================*/
        $wp_customize->add_setting(
            'theme_setting_expertice1',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_expertice',
            array(
                'label'=>__('Enter your expertice 1','sablu_hasan'),
                'description'=>__('Enter your expertice','sablu_hasan'),
                'section'=>'theme_section_personal_info',
                'settings'=>'theme_setting_expertice1',
                'type'=>'text',
            ),
        ));

       
        $wp_customize->add_setting(
            'theme_setting_expertice2',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_expertice2',
            array(
                'label'=>__('Enter your expertice 2','sablu_hasan'),
                'description'=>__('Enter your expertice','sablu_hasan'),
                'section'=>'theme_section_personal_info',
                'settings'=>'theme_setting_expertice2',
                'type'=>'text',
            ),
        ));

        $wp_customize->add_setting(
            'theme_setting_expertice3',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_expertice3',
            array(
                'label'=>__('Enter your expertice 3','sablu_hasan'),
                'description'=>__('Enter your expertice','sablu_hasan'),
                'section'=>'theme_section_personal_info',
                'settings'=>'theme_setting_expertice3',
                'type'=>'text',
            ),
        ));
/*================================
*Personal info ->sectin-2 end
=================================*/
    }
}

add_action('customize_register','custmythemeoption')


?>