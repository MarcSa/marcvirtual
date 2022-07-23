<?php 

function mv_misc_customize_section( $wp_customize ){
    /**
     * MV
     * 28/28/2022, 18:43h
     * Settings added for miscellaneous customizing menu
     **/

    $wp_customize->add_setting( 'mv_header_show_search', [
        'default'       =>  'yes',
        'transport'     =>  'postMessage'
        
    ] );
    $wp_customize->add_setting( 'mv_header_show_cart', [
        'default'       =>  'yes',
        'transport'     =>  'postMessage'

    ] );
    $wp_customize->add_setting( 'mv_footer_copyright_text', [
        'default'       =>  'Copyrights &copy; 2022 All Rights Reserved.'

    ] );
    $wp_customize->add_setting( 'mv_footer_tos_page', [
        'default'       =>  0

    ] );
    $wp_customize->add_setting( 'mv_footer_privacy_page', [
        'default'       =>  0

    ] );
    $wp_customize->add_setting( 'mv_show_header_popular_posts', [
        'default'       =>  false
        
    ] );
    $wp_customize->add_setting( 'mv_popular_posts_widget_title', [
        'default'       =>  'Breaking News'

    ] );
    $wp_customize->add_setting( 'mv_read_more_color', [
        'default'       =>  '#1ABC9C'
    ] );
    $wp_customize->add_setting( 'mv_report_file', [
        'default'       =>  ''
    ] );

    $wp_customize->add_section( 'mv_misc_section', [
        'title'         =>  __('Marcvirtual Misc Settings', 'marcvirtual'),
        'priority'      =>  30,
        'panel'         =>  'marcvirtual'

    ] );

    $wp_customize->add_control( new WP_Customize_control ( 
        $wp_customize,
        'mv_header_show_search_input',
        array(
            'label'                 =>      __( 'Show Search Button in Header', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_header_show_search', 
            'type'                  =>      'checkbox', 
            'choices'               =>      [
                'yes'               =>      'Yes'
            ], 
        )
    ));
    $wp_customize->add_control( new WP_Customize_control ( 
        $wp_customize,
        'mv_header_show_cart_input',
        array(
            'label'                 =>      __( 'Show Cart Button in Header', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_header_show_cart', 
            'type'                  =>      'checkbox', 
            'choices'               =>      [
                'yes'               =>      'Yes'
            ]
        )
    ));
    $wp_customize->add_control( new WP_Customize_control ( 
        $wp_customize,
        'mv_footer_copyright_text_input',
        array(
            'label'                 =>      __( 'Displays your copyright text at the page footer', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_footer_copyright_text'
        )

    ));
    $wp_customize->add_control( new WP_Customize_control ( 
        $wp_customize,
        'mv_footer_tos_page_input',
        array(
            'label'                 =>      __( 'Footer TOS Page', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_footer_tos_page',
            'type'                  =>      'dropdown-pages' 
        )
    ));    
    $wp_customize->add_control( new WP_Customize_control ( 
        $wp_customize,
        'mv_footer_privacy_page_input',
        array(
            'label'                 =>      __( 'Footer Privacy Policy Page', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_footer_privacy_page',
            'type'                  =>      'dropdown-pages' 
        )
    ));    
    $wp_customize->add_control( new WP_Customize_Color_Control ( 
        $wp_customize,
        'mv_read_more_color_input',
        array(
            'label'                 =>      __( 'Read more link color', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_read_more_color'

        )
    ));    
    $wp_customize->add_control( new WP_Customize_Upload_Control ( 
        $wp_customize,
        'mv_report_file_input',
        array(
            'label'                 =>      __( 'File Report', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_report_file'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control ( 
        $wp_customize,
        'mv_show_header_popular_posts_widget_input',
        array(
            'label'                 =>      __( 'Show Header Popular Posts Widget', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_show_header_popular_posts',
            'type'                  =>      'checkbox',
            'choices'               =>      [
                'yes'               =>      __( 'Yes', 'marcvirtual' )
            ]
        )
    ));    
    $wp_customize->add_control( new WP_Customize_Control ( 
        $wp_customize,
        'mv_popular_posts_widget_title',
        array(
            'label'                 =>      __( 'Popular Posts Widget Title', 'marcvirtual' ), 
            'section'               =>      'mv_misc_section', 
            'settings'              =>      'mv_popular_posts_widget_title',

        )
    ));    

}

?>