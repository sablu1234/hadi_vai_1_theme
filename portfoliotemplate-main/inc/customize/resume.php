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
            'theme_panel_2_resume',
            array(
                'title'=>__('Resume option','sablu_hasan',),
                'priority'=>30,
            ),
        );

//slider section
        $wp_customize->add_section(
            'theme_section_resume1',
            array(
                'title'=>__('Resume','sablu_hasan'),
                'priority'=>30,
                'panel'=>'theme_panel_2_resume',
            ),
            );
            
        $wp_customize->add_setting(
            'theme_setting_resume',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );

        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_personal_info',
            array(
                'label'=>__('Enter Name','sablu_hasan'),
                'description'=>__('Enter your name','sablu_hasan'),
                'section'=>'theme_section_resume1',
                'settings'=>'theme_setting_resume',
                'type'=>'text',
            ),
        ));

    }
}

add_action('customize_register','custmythemeoption')


?>