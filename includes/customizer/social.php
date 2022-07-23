<?php 

function mv_social_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'mv_facebook_handle', [
        'default'   =>  ''
    ] );
    
    $wp_customize->add_setting( 'mv_twitter_handle', [
        'default'   =>  ''
    ] );

    $wp_customize->add_setting( 'mv_instagram_handle', [
        'default'   =>  ''
    ] );

    $wp_customize->add_setting( 'mv_phone_number', [
        'default'   =>  ''
    ] );

    $wp_customize->add_setting( 'mv_email', [
        'default'   =>  ''
    ] );

    $wp_customize->add_section( 'mv_social_section', [
        'title'     =>  __( 'Marcvirtual Social Settings', 'marcvirtual' ),
        'priority'  =>  30,
        'panel'     =>  'marcvirtual'

    ] );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mv_social_facebook_input',
            array(
                'label'          => __( 'Facebook Handle', 'marcvirtual' ),
                'section'        => 'mv_social_section',
                'settings'       => 'mv_facebook_handle'
               
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mv_social_twitter_input',
            array(
                'label'          => __( 'Twitter Handle', 'marcvirtual' ),
                'section'        => 'mv_social_section',
                'settings'       => 'mv_twitter_handle'
               
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mv_social_instagram_input',
            array(
                'label'          => __( 'Instagram Handle', 'marcvirtual' ),
                'section'        => 'mv_social_section',
                'settings'       => 'mv_instagram_handle'
               
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mv_social_phone_number_input',
            array(
                'label'          => __( 'Phone number', 'marcvirtual' ),
                'section'        => 'mv_social_section',
                'settings'       => 'mv_phone_number'
               
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mv_social_email',
            array(
                'label'          => __( 'Email', 'marcvirtual' ),
                'section'        => 'mv_social_section',
                'settings'       => 'mv_email'
               
            )
        )
    );
}
