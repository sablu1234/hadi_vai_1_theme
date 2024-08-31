<?php 
add_action( 'cmb2_admin_init', 'cmb2_metaboxes' );
function cmb2_metaboxes(){
$cmb =new_cmb2_box(array(
    'id'=>'frist_metabox',
    'title'=>'Frist Metabox',
    'object_types'=>array('post',),
    'context'=>'normal',
    'priority'=>'high',
    'show_names'=>true,
));
    $cmb->add_field(array(
        'id'=>'text_test',
        'name'=>'type Your Name',
        'type'=>'text',
        'desc'       => __( 'field description (optional)', ),
        // 'default'       => __( 'field description (optional)', ),
    ));

    $cmb->add_field(array(
        'id'=>'test_small',
        'name'=>'type Your Name',
        'type'=>'text_small',
        'desc'       => __( 'field description (optional)', ),
        // 'default'       => __( 'field description (optional)', ),
    ));

    $cmb->add_field( array(
        'name' => 'Test Text Email',
        'id'   => 'text_email',
        'type' => 'text_email',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'id'   => 'wiki_test_facebookurl',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );


    $cmb->add_field( array(
        'name' => 'Test Money',
        'desc' => 'field description (optional)',
        'id' => 'wiki_test_textmoney',
        'type' => 'text_money',
        'before_field' => '	&euro;', // Replaces default '$'
    ) );

    $cmb->add_field( array(
        'name' => 'Test Text Area',
        'desc' => 'field description (optional)',
        'default' => 'standard value (optional)',
        'id' => 'wiki_test_textarea',
        'type' => 'textarea'
    ) );

    $cmb->add_field( array(
        'name' => 'Test Text Area Code',
        'desc' => 'field description (optional)',
        'default' => 'standard value (optional)',
        'id' => 'wiki_test_textareacode',
        'type' => 'textarea_code'
    ) );

    $cmb->add_field( array(
        'name' => 'Test Time Picker',
        'id' => 'wiki_test_texttime',
        'type' => 'text_time'
        // Override default time-picker attributes:
        // 'attributes' => array(
        // 	'data-timepicker' => json_encode( array(
        // 		'timeOnlyTitle' => __( 'Choose your Time', 'cmb2' ),
        // 		'timeFormat' => 'HH:mm',
        // 		'stepMinute' => 1, // 1 minute increments instead of the default 5
        // 	) ),
        // ),
        // 'time_format' => 'h:i:s A',
    ) );


    $cmb->add_field( array(
        'name' => 'Time zone',
        'id'   => 'wiki_test_timezone',
        'type' => 'select_timezone',
    ) );

    $cmb->add_field( array(
        'name' => 'Test Date Picker',
        'id'   => 'wiki_test_textdate_timestamp',
        'type' => 'text_date',
        // 'timezone_meta_key' => 'wiki_test_timezone',
        // 'date_format' => 'l jS \of F Y',
    ) );

    $cmb->add_field( array(
        'name' => 'Test Date/Time Picker Combo (UNIX timestamp)',
        'id'   => 'wiki_test_datetime_timestamp',
        'type' => 'text_datetime_timestamp',
    ) );

    $cmb->add_field( array(
        'name' => 'Test Date/Time Picker/Time zone Combo (serialized DateTime object)',
        'id'   => 'wiki_test_datetime_timestamp_timezone',
        'type' => 'text_datetime_timestamp_timezone',
    ) );

    $cmb->add_field( array(
        'id'   => 'wiki_test_hidden',
        'type' => 'hidden',
    ) );

    $cmb->add_field( array(
        'id'   => 'wiki_test_hidden',
        'type' => 'hidden',
    ) );

    $cmb->add_field( array(
        'name'    => 'Test Color Picker',
        'id'      => 'wiki_test_colorpicker',
        'type'    => 'colorpicker',
        'default' => '#ffffff',
        // 'options' => array(
        // 	'alpha' => true, // Make this a rgba color picker.
        // ),
    ) );

    $cmb->add_field( array(
        'name' => 'Test Checkbox',
        'desc' => 'field description (optional)',
        'id'   => 'wiki_test_checkbox',
        'type' => 'checkbox',
    ) );

    $cmb->add_field( array(
        'name'    => 'Test Multi Checkbox',
        'desc'    => 'field description (optional)',
        'id'      => 'wiki_test_multicheckbox',
        'type'    => 'multicheck',
        'options' => array(
            'check1' => 'i am hasan',
            'check2' => 'Check Two',
            'check3' => 'Check Three',
        ),
    ) );

    $cmb->add_field( array(
        'name'             => 'Test Radio',
        'id'               => 'wiki_test_radio',
        'type'             => 'radio',
        'show_option_none' => true,
        'options'          => array(
            'standard' => __( 'Option One', 'cmb2' ),
            'custom'   => __( 'Option Two', 'cmb2' ),
            'none'     => __( 'Option Three', 'cmb2' ),
        ),
    ) );
    
    $cmb->add_field( array(
        'name'             => 'Test Select',
        'desc'             => 'Select an option',
        'id'               => 'wiki_test_select',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'custom',
        'options'          => array(
            'standard' => __( 'Option One', 'cmb2' ),
            'custom'   => __( 'Option Two', 'cmb2' ),
            'none'     => __( 'Option Three', 'cmb2' ),
        ),
    ) );

    $cmb->add_field( array(
        'name'           => 'Test Taxonomy Radio',
        'desc'           => 'Description Goes Here',
        'id'             => 'wiki_test_taxonomy_radio',
        'taxonomy'       => '', // Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        // Optional :
        'text'           => array(
            'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
        ),
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );

    $cmb->add_field( array(
        'name'           => 'Test Taxonomy Select',
        'desc'           => 'Description Goes Here',
        'id'             => 'wiki_test_taxonomy_select',
        'taxonomy'       => 'category', //Enter Taxonomy Slug
        'type'           => 'taxonomy_select',
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );

    $cmb->add_field( array(
        'name'           => 'Test Taxonomy Multicheck',
        'desc'           => 'Description Goes Here',
        'id'             => 'wiki_test_taxonomy_multicheck',
        'taxonomy'       => '', //Enter Taxonomy Slug
        'type'           => 'taxonomy_multicheck',
        // Optional :
        'text'           => array(
            'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
        ),
        'remove_default' => 'true', // Removes the default metabox provided by WP core.
        // Optionally override the args sent to the WordPress get_terms function.
        'query_args' => array(
            // 'orderby' => 'slug',
            // 'hide_empty' => true,
        ),
    ) );

    $cmb->add_field( array(
        'name'    => 'Test wysiwyg',
        'desc'    => 'field description (optional)',
        'id'      => 'wiki_test_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array(),
    ) );

    $cmb->add_field( array(
        'name'    => 'Test File',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => 'wiki_test_image',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            // 'type' => array(
            // 	'image/gif',
            // 	'image/jpeg',
            // 	'image/png',
            // ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );

    $cmb->add_field( array(
        'name' => 'Test File List',
        'desc' => '',
        'id'   => 'wiki_test_file_list',
        'type' => 'file_list',
        // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        // 'query_args' => array( 'type' => 'image' ), // Only images attachment
        // Optional, override default text strings
        'text' => array(
            'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
            'remove_image_text' => 'Replacement', // default: "Remove Image"
            'file_text' => 'Replacement', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'oEmbed',
        'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
        'id'   => 'wiki_test_embed',
        'type' => 'oembed',
    ) );

}

?>