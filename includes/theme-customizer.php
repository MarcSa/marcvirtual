<?php 

function mv_customize_register( $wp_customize ){

    // echo '<pre>';
    //     var_dump( $wp_customize );
    // echo '</pre>';

    $wp_customize->get_section( 'title_tagline' )->title    =   'General';

    $wp_customize->add_panel( 'marcvirtual', [
        'title'         =>      __( 'Marcvirtual', 'marcvirtual'),
        'description'   =>      '<p>Marcvirtual Theme Settings</p>',
        'priority'      =>      160
    ] );

    mv_social_customizer_section( $wp_customize );
    mv_misc_customize_section( $wp_customize );
}
