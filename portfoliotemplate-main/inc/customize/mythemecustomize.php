<?php 


if(!function_exists('custmythemeoption')){
    function custmythemeoption($wp_customize){
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

/*================================
*resume1 ->sectin-3 start
=================================*/
//resume section
$wp_customize->add_section(
    'theme_section_my_expertice',
    array(
        'title'=>__('My Resume Expertise','sablu_hasan'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
    );
    //resume->Expertise->title 1
$wp_customize->add_setting(
    'theme_setting_resume_expertise_title',
    array(
        'default' => '',
        'transport'=> 'refresh',
    ),
);
    //resume->Expertise->title 1
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_resume_title1',
    array(
        'label'=>__('Enter Your Expertise title 1'),
        'description'=>__('Enter Your 2017 - Present title 1','sablu_hasan'),
        'section'=>'theme_section_my_expertice',
        'settings'=>'theme_setting_resume_expertise_title',
        'type'=>'text',
    ),
));

    //resume->Expertise->des 1
    $wp_customize->add_setting(
        'theme_setting_resume_expertise_des',
        array(
            'default' => '',
            'transport'=> 'refresh',
        ),
    );
        //resume->Expertise->des 1
    $wp_customize->add_control(new wp_customize_control(
        $wp_customize,
        'theme_control_resume_des',
        array(
            'label'=>__('Enter Your Expertise des 1'),
            'description'=>__('Enter Your 2017 - Present des 1','sablu_hasan'),
            'section'=>'theme_section_my_expertice',
            'settings'=>'theme_setting_resume_expertise_des',
            'type'=>'text',
        ),
    ));

        //resume->Expertise->title 2
        $wp_customize->add_setting(
            'theme_setting_resume_expertise_title2',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );
            //resume->Expertise->title 2
        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_resume_title2',
            array(
                'label'=>__('Enter Your Expertise title'),
                'description'=>__('Enter Your 2017 - Present Title 2','sablu_hasan'),
                'section'=>'theme_section_my_expertice',
                'settings'=>'theme_setting_resume_expertise_title2',
                'type'=>'text',
            ),
        ));

            //resume->Expertise->des 2
            $wp_customize->add_setting(
                'theme_setting_resume_expertise_des2',
                array(
                    'default' => '',
                    'transport'=> 'refresh',
                ),
            );
                //resume->Expertise->des 2
            $wp_customize->add_control(new wp_customize_control(
                $wp_customize,
                'theme_control_resume_des2',
                array(
                    'label'=>__('Enter Your Expertise title des 2'),
                    'description'=>__('Enter Your 2017 - Present des 2','sablu_hasan'),
                    'section'=>'theme_section_my_expertice',
                    'settings'=>'theme_setting_resume_expertise_des2',
                    'type'=>'textarea',
                ),
            ));

              //resume->Expertise->title 3
              $wp_customize->add_setting(
                'theme_setting_resume_expertise_title3',
                array(
                    'default' => '',
                    'transport'=> 'refresh',
                ),
            );
                //resume->Expertise->title 3
            $wp_customize->add_control(new wp_customize_control(
                $wp_customize,
                'theme_control_resume_title3',
                array(
                    'label'=>__('Enter Your Expertise title 3'),
                    'description'=>__('Enter Your 2015 - 2016 Title 3','sablu_hasan'),
                    'section'=>'theme_section_my_expertice',
                    'settings'=>'theme_setting_resume_expertise_title3',
                    'type'=>'text',
                ),
            ));

                 //resume->Expertise->des 3
                 $wp_customize->add_setting(
                    'theme_setting_resume_expertise_des3',
                    array(
                        'default' => '',
                        'transport'=> 'refresh',
                    ),
                );
                    //resume->Expertise->des 3
                $wp_customize->add_control(new wp_customize_control(
                    $wp_customize,
                    'theme_control_resume_des3',
                    array(
                        'label'=>__('Enter Your Expertise title 3'),
                        'description'=>__('Enter Your 2015 - 2016 Title 3','sablu_hasan'),
                        'section'=>'theme_section_my_expertice',
                        'settings'=>'theme_setting_resume_expertise_des3',
                        'type'=>'textarea',
                    ),
                ));
/*================================
*resume ->sectin-3 end
=================================*/

/*================================
*resume Education ->sectin-4 start
=================================*/
    $wp_customize->add_section(
        'theme_section_resume_education',
        array(
            'title'=>__('My Resume Education'),
            'priority'=>30,
            'panel'=>'theme_option_id',
        ),
    );
    //resume->Education->title 1
$wp_customize->add_setting(
    'theme_setting_resume_education_title1',
    array(
        'default' => '',
        'transport'=> 'refresh',
    ),
);
    //resume->Education->title 1
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_resume_education_title1',
    array(
        'label'=>__('Enter Your Expertise title 1'),
        'description'=>__('Enter Your 2017 - Present title 1','sablu_hasan'),
        'section'=>'theme_section_resume_education',
        'settings'=>'theme_setting_resume_education_title1',
        'type'=>'text',
    ),
));

    //resume->Education->des 1
    $wp_customize->add_setting(
        'theme_setting_resume_education_des1',
        array(
            'default' => '',
            'transport'=> 'refresh',
        ),
    );
        //resume->Education->des 1
    $wp_customize->add_control(new wp_customize_control(
        $wp_customize,
        'theme_control_resume_education_des1',
        array(
            'label'=>__('Enter Your Expertise des 1'),
            'description'=>__('Enter Your 2017 - Present des 1','sablu_hasan'),
            'section'=>'theme_section_resume_education',
            'settings'=>'theme_setting_resume_education_des1',
            'type'=>'text',
        ),
    ));

        //resume->Education->title 2
        $wp_customize->add_setting(
            'theme_setting_resume_education_title2',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );
            //resume->Education->title 2
        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_resume_education_title2',
            array(
                'label'=>__('Enter Your Expertise 2016 - 2017 title 2'),
                'description'=>__('Enter Your 2016 - 2017 title 2','sablu_hasan'),
                'section'=>'theme_section_resume_education',
                'settings'=>'theme_setting_resume_education_title2',
                'type'=>'text',
            ),
        ));


          //resume->Education->des 2
          $wp_customize->add_setting(
            'theme_setting_resume_education_des2',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );
            //resume->Education->des 2
        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_resume_education_des2',
            array(
                'label'=>__('Enter Your Expertise 2016 - 2017 des 2'),
                'description'=>__('Enter Your 2016 - 2017 des 2','sablu_hasan'),
                'section'=>'theme_section_resume_education',
                'settings'=>'theme_setting_resume_education_des2',
                'type'=>'textarea',
            ),
        ));

        //resume->Education->title 3
        $wp_customize->add_setting(
            'theme_setting_resume_education_title3',
            array(
                'default' => '',
                'transport'=> 'refresh',
            ),
        );
            //resume->Education->title 3
        $wp_customize->add_control(new wp_customize_control(
            $wp_customize,
            'theme_control_resume_education_title3',
            array(
                'label'=>__('Enter Your Expertise 2015 - 2016 title 3'),
                'description'=>__('Enter Your 2015 - 2016 title 3','sablu_hasan'),
                'section'=>'theme_section_resume_education',
                'settings'=>'theme_setting_resume_education_title3',
                'type'=>'text',
            ),
        ));

            //resume->Education->des 3
            $wp_customize->add_setting(
                'theme_setting_resume_education_des3',
                array(
                    'default' => '',
                    'transport'=> 'refresh',
                ),
            );
                //resume->Education->des 3
            $wp_customize->add_control(new wp_customize_control(
                $wp_customize,
                'theme_control_resume_education_des3',
                array(
                    'label'=>__('Enter Your Expertise 2015 - 2016 des 3'),
                    'description'=>__('Enter Your 2015 - 2016 des 3','sablu_hasan'),
                    'section'=>'theme_section_resume_education',
                    'settings'=>'theme_setting_resume_education_des3',
                    'type'=>'textarea',
                ),
            ));

/*================================
*resume Education ->sectin-4 end
=================================*/

/*================================
*resume skills ->sectin-5 start
=================================*/
// resume skills
$wp_customize->add_section(
    'theme_section_resume_skills',
    array(
        'title'=>__('My Resume Skills'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
);

//resume->skills->html & css
$wp_customize->add_setting(
    'theme_setting_resume_skills_html_css',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//resume->skills->html&css
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_html&css',
    array(
        'label'=>__('Up Html css skill','sablu_hasan'),
        'description'=>__('inter your html skills','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_html_css',
        'type'=>'text',
    ),
));

//resume->skills->javascript
$wp_customize->add_setting(
    'theme_setting_resume_skills_javascript',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//resume->skills->javascript
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_javascript',
    array(
        'label'=>__('Up Html javascript','sablu_hasan'),
        'description'=>__('inter your javascript','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_javascript',
        'type'=>'text',
    ),
));


//resume->skills->php
$wp_customize->add_setting(
    'theme_setting_resume_skills_php',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//resume->skills->php
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_php',
    array(
        'label'=>__('Up Html php','sablu_hasan'),
        'description'=>__('inter your php','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_php',
        'type'=>'text',
    ),
));


//resume->skills->SQL
$wp_customize->add_setting(
    'theme_setting_resume_skills_sql',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//resume->skills->SQL
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_sql',
    array(
        'label'=>__('Up Html SQL','sablu_hasan'),
        'description'=>__('inter your SQL','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_sql',
        'type'=>'text',
    ),
));

//resume->skills->Laborum
$wp_customize->add_setting(
    'theme_setting_resume_skills_Laborum',
    array(
        'default'   => 'Laborum',
        'transport'=>'refresh',
    ),
);

//resume->skills->Laborum
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_Laborum',
    array(
        'label'=>__('Up Html Laborum','sablu_hasan'),
        'description'=>__('inter your Laborum','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_Laborum',
        'type'=>'text',
    ),
));

//resume->skills->Tempora
$wp_customize->add_setting(
    'theme_setting_resume_skills_Tempora',
    array(
        'default'   => '',
        'transport'=>'refresh',
    ),
);

//resume->skills->Tempora
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_Tempora',
    array(
        'label'=>__('Up Html Tempora','sablu_hasan'),
        'description'=>__('inter your Tempora','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_Tempora',
        'type'=>'text',
    ),
));

//resume->skills->language1
$wp_customize->add_setting(
    'theme_setting_resume_skills_language1',
    array(
        'default'   => '',
        'transport'=>'refresh',
    ),
);

//resume->skills->language1
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_language1',
    array(
        'label'=>__('Enter language1','sablu_hasan'),
        'description'=>__('enter your language1','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_language1',
        'type'=>'text',
    ),
));

//resume->skills->language2
$wp_customize->add_setting(
    'theme_setting_resume_skills_language2',
    array(
        'default'   => '',
        'transport'=>'refresh',
    ),
);

//resume->skills->language2
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_language2',
    array(
        'label'=>__('Enter language2','sablu_hasan'),
        'description'=>__('enter your language2','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_language2',
        'type'=>'text',
    ),
));

//resume->skills->language3
$wp_customize->add_setting(
    'theme_setting_resume_skills_language3',
    array(
        'default'   => '',
        'transport'=>'refresh',
    ),
);

//resume->skills->language3
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_skills_language3',
    array(
        'label'=>__('Enter language2','sablu_hasan'),
        'description'=>__('enter your language2','sablu_hasan'),
        'section'=>'theme_section_resume_skills',
        'settings'=>'theme_setting_resume_skills_language3',
        'type'=>'text',
    ),
));

/*================================
*contrubution ->sectin-6 start
=================================*/
// contrubution ->hour_worked
$wp_customize->add_section(
    'theme_section_contrubution',
    array(
        'title'=>__('contrubution'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
);

//contrubution ->hour_worked
$wp_customize->add_setting(
    'theme_setting_hour_worked',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//contrubution->hour_worked
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_hour_worked',
    array(
        'label'=>__('enter your working Hour','sablu_hasan'),
        'description'=>__('enter your working Hour','sablu_hasan'),
        'section'=>'theme_section_contrubution',
        'settings'=>'theme_setting_hour_worked',
        'type'=>'text',
    ),
));

//contrubution ->project
$wp_customize->add_setting(
    'theme_setting_project',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//contrubution->project
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_project',
    array(
        'label'=>__('enter your working project','sablu_hasan'),
        'description'=>__('enter your working project','sablu_hasan'),
        'section'=>'theme_section_contrubution',
        'settings'=>'theme_setting_project',
        'type'=>'text',
    ),
));


//contrubution ->clients
$wp_customize->add_setting(
    'theme_setting_clients',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//contrubution->clients
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_clients',
    array(
        'label'=>__('enter your working clients','sablu_hasan'),
        'description'=>__('enter your working clients','sablu_hasan'),
        'section'=>'theme_section_contrubution',
        'settings'=>'theme_setting_clients',
        'type'=>'text',
    ),
));

//contrubution ->drinked
$wp_customize->add_setting(
    'theme_setting_drinked',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//contrubution->clients
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_drinked',
    array(
        'label'=>__('enter your working drinked','sablu_hasan'),
        'description'=>__('enter your working drinked','sablu_hasan'),
        'section'=>'theme_section_contrubution',
        'settings'=>'theme_setting_drinked',
        'type'=>'text',
    ),
));
/*================================
*contrubution ->sectin-6 end
=================================*/

/*================================
*services ->sectin-7 start
=================================*/
// services ->1
$wp_customize->add_section(
    'theme_section_services',
    array(
        'title'=>__('Services'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
);

//services ->title1
$wp_customize->add_setting(
    'theme_setting_services_titles1',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->title1
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_title1',
    array(
        'label'=>__('enter your title1','sablu_hasan'),
        'description'=>__('enter your title1','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_titles1',
        'type'=>'text',
    ),
));

//services ->des1
$wp_customize->add_setting(
    'theme_setting_services_desc1',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->des1
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_des1',
    array(
        'label'=>__('enter your des1','sablu_hasan'),
        'description'=>__('enter your des1','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_desc1',
        'type'=>'textarea',
    ),
));

//services ->titles2
$wp_customize->add_setting(
    'theme_setting_services_titles2',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->titles2
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_titles2',
    array(
        'label'=>__('enter your titles2','sablu_hasan'),
        'description'=>__('enter your titles2','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_titles2',
        'type'=>'text',
    ),
));

//services ->desc2
$wp_customize->add_setting(
    'theme_setting_services_desc2',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->desc2
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_desc2',
    array(
        'label'=>__('enter your desc2','sablu_hasan'),
        'description'=>__('enter your desc2','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_desc2',
        'type'=>'textarea',
    ),
));

//services ->titles3
$wp_customize->add_setting(
    'theme_setting_services_titles3',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->titles3
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_titles3',
    array(
        'label'=>__('enter your titles3','sablu_hasan'),
        'description'=>__('enter your titles3','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_titles3',
        'type'=>'text',
    ),
));

//services ->desc3
$wp_customize->add_setting(
    'theme_setting_services_desc3',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->desc3
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_desc3',
    array(
        'label'=>__('enter your desc3','sablu_hasan'),
        'description'=>__('enter your desc3','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_desc3',
        'type'=>'textarea',
    ),
));

//services ->titles4
$wp_customize->add_setting(
    'theme_setting_services_titles4',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->titles4
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_titles4',
    array(
        'label'=>__('enter your titles4','sablu_hasan'),
        'description'=>__('enter your titles4','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_titles4',
        'type'=>'text',
    ),
));

//services ->desc4
$wp_customize->add_setting(
    'theme_setting_services_desc4',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->desc4
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_desc4',
    array(
        'label'=>__('enter your desc4','sablu_hasan'),
        'description'=>__('enter your desc4','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_desc4',
        'type'=>'textarea',
    ),
));

//services ->titles5
$wp_customize->add_setting(
    'theme_setting_services_titles5',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->titles5
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_titles5',
    array(
        'label'=>__('enter your titles5','sablu_hasan'),
        'description'=>__('enter your titles5','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_titles5',
        'type'=>'text',
    ),
));

//services ->desc5
$wp_customize->add_setting(
    'theme_setting_services_desc5',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->desc5
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_desc5',
    array(
        'label'=>__('enter your desc5','sablu_hasan'),
        'description'=>__('enter your desc5','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_desc5',
        'type'=>'textarea',
    ),
));

//services ->titles6
$wp_customize->add_setting(
    'theme_setting_services_titles6',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->titles6
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_titles6',
    array(
        'label'=>__('enter your titles6','sablu_hasan'),
        'description'=>__('enter your titles6','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_titles6',
        'type'=>'text',
    ),
));

//services ->desc6
$wp_customize->add_setting(
    'theme_setting_services_desc6',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//services->desc6
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_services_desc6',
    array(
        'label'=>__('enter your desc6','sablu_hasan'),
        'description'=>__('enter your desc6','sablu_hasan'),
        'section'=>'theme_section_services',
        'settings'=>'theme_setting_services_desc6',
        'type'=>'textarea',
    ),
));
/*================================
*pricing ->sectin-7 end
=================================*/


/*================================
*pricing ->sectin-8 start
=================================*/
// pricing ->
$wp_customize->add_section(
    'theme_section_pricing',
    array(
        'title'=>__('Pricing'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
);

//pricing ->money1
$wp_customize->add_setting(
    'theme_setting_pricing_money1',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->money1
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_money1',
    array(
        'label'=>__('enter your package1','sablu_hasan'),
        'description'=>__('enter your package1','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_money1',
        'type'=>'text',
    ),
));

//pricing ->url1
$wp_customize->add_setting(
    'theme_setting_pricing_url1',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->url1
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_url1',
    array(
        'label'=>__('enter your url1','sablu_hasan'),
        'description'=>__('enter your url1','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_url1',
        'type'=>'url',
    ),
));

//pricing ->money2
$wp_customize->add_setting(
    'theme_setting_pricing_money2',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->money2
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_money2',
    array(
        'label'=>__('enter your package2','sablu_hasan'),
        'description'=>__('enter your package2','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_money2',
        'type'=>'text',
    ),
));

//pricing ->url2
$wp_customize->add_setting(
    'theme_setting_pricing_url2',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->url2
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_url2',
    array(
        'label'=>__('enter your url2','sablu_hasan'),
        'description'=>__('enter your url2','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_url2',
        'type'=>'url',
    ),
));

//pricing ->money3
$wp_customize->add_setting(
    'theme_setting_pricing_money3',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->money3
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_money3',
    array(
        'label'=>__('enter your package3','sablu_hasan'),
        'description'=>__('enter your package3','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_money3',
        'type'=>'text',
    ),
));

//pricing ->url3
$wp_customize->add_setting(
    'theme_setting_pricing_url3',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->url3
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_url3',
    array(
        'label'=>__('enter your url3','sablu_hasan'),
        'description'=>__('enter your url3','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_url3',
        'type'=>'url',
    ),
));

//pricing ->money4
$wp_customize->add_setting(
    'theme_setting_pricing_money4',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->money4
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_money4',
    array(
        'label'=>__('enter your package4','sablu_hasan'),
        'description'=>__('enter your package4','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_money4',
        'type'=>'text',
    ),
));

//pricing ->url4
$wp_customize->add_setting(
    'theme_setting_pricing_url4',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//pricing->url4
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_pricing_url4',
    array(
        'label'=>__('enter your url3','sablu_hasan'),
        'description'=>__('enter your url4','sablu_hasan'),
        'section'=>'theme_section_pricing',
        'settings'=>'theme_setting_pricing_url4',
        'type'=>'url',
    ),
));
/*================================
*pricing ->sectin-8 end
=================================*/

/*================================
*hire ->sectin-9 start
=================================*/
// hire ->
$wp_customize->add_section(
    'theme_section_hire',
    array(
        'title'=>__('Hire Me'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
);

//hire ->title
$wp_customize->add_setting(
    'theme_setting_hire_title',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//hire->title
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_hire',
    array(
        'label'=>__('enter your Title','sablu_hasan'),
        'description'=>__('enter your Title','sablu_hasan'),
        'section'=>'theme_section_hire',
        'settings'=>'theme_setting_hire_title',
        'type'=>'text',
    ),
));

//hire ->url
$wp_customize->add_setting(
    'theme_setting_hire_url',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//hire->url
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_hire_url',
    array(
        'label'=>__('enter your url3','sablu_hasan'),
        'description'=>__('enter your url4','sablu_hasan'),
        'section'=>'theme_section_hire',
        'settings'=>'theme_setting_hire_url',
        'type'=>'url',
    ),
));
/*================================
*hire ->sectin-9 end
=================================*/

/*================================
*contact ->sectin-10 start
=================================*/
// hire ->
$wp_customize->add_section(
    'theme_section_contact',
    array(
        'title'=>__('Contact'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
);

//contact ->phone
$wp_customize->add_setting(
    'theme_setting_contact_phone',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//contact->phone
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_contact_phone',
    array(
        'label'=>__('enter your phone','sablu_hasan'),
        'description'=>__('enter your phone','sablu_hasan'),
        'section'=>'theme_section_contact',
        'settings'=>'theme_setting_contact_phone',
        'type'=>'text',
    ),
));

//contact ->address
$wp_customize->add_setting(
    'theme_setting_contact_address',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//contact->address
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_contact_address',
    array(
        'label'=>__('enter your address','sablu_hasan'),
        'description'=>__('enter your address','sablu_hasan'),
        'section'=>'theme_section_contact',
        'settings'=>'theme_setting_contact_address',
        'type'=>'text',
    ),
));

//contact ->email
$wp_customize->add_setting(
    'theme_setting_contact_email',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//contact->email
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_contact_email',
    array(
        'label'=>__('enter your phone','sablu_hasan'),
        'description'=>__('enter your phone','sablu_hasan'),
        'section'=>'theme_section_contact',
        'settings'=>'theme_setting_contact_email',
        'type'=>'text',
    ),
));

/*================================
*contact ->sectin-10 end
=================================*/

/*================================
*footer ->sectin-11 start
=================================*/
// hire ->
$wp_customize->add_section(
    'theme_section_footer',
    array(
        'title'=>__('Footer'),
        'priority'=>30,
        'panel'=>'theme_option_id',
    ),
);

//footer ->title
$wp_customize->add_setting(
    'theme_setting_footer',
    array(
        'default'=>'',
        'transport'=>'refresh',
    ),
);

//footer->title
$wp_customize->add_control(new wp_customize_control(
    $wp_customize,
    'theme_control_footer',
    array(
        'label'=>__('enter your title','sablu_hasan'),
        'description'=>__('enter your title','sablu_hasan'),
        'section'=>'theme_section_footer',
        'settings'=>'theme_setting_footer',
        'type'=>'text',
    ),
));
/*================================
*footer ->sectin-11 end
=================================*/






    }
}

add_action('customize_register','custmythemeoption')


?>