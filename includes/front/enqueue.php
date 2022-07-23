<?php

function mv_enqueue(){
    $uri                = get_theme_file_uri(  );
    $ver                = MV_DEV_MODE ? time() : false;

    wp_register_style( 'mv_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver );
    wp_register_style( 'mv_boostrap', $uri . '/assets/css/bootstrap.css', [], $ver );
    wp_register_style( 'mv_style', $uri . '/assets/css/style.css', [], $ver );
    wp_register_style( 'mv_dark', $uri . '/assets/css/dark.css', [], $ver );
    wp_register_style( 'mv_font_icons', $uri . '/assets/css/font-icons.css', [], $ver );
    wp_register_style( 'mv_animate', $uri . '/assets/css/animate.css', [], $ver );
    wp_register_style( 'mv_magnific_popup', $uri . '/assets/css/magnific-popup.css', [], $ver );
    wp_register_style( 'mv_responsive', $uri . '/assets/css/responsive.css', [], $ver );
    wp_register_style( 'mv_custom', $uri . '/assets/css/custom.css', [], $ver );

    wp_enqueue_style( 'mv_google_fonts' );
    wp_enqueue_style( 'mv_boostrap' );
    wp_enqueue_style( 'mv_style' );
    wp_enqueue_style( 'mv_dark' );
    wp_enqueue_style( 'mv_font_icons' );
    wp_enqueue_style( 'mv_animate' );
    wp_enqueue_style( 'mv_magnific_popup' );
    wp_enqueue_style( 'mv_responsive' );
    wp_enqueue_style( 'mv_custom' );

    $read_more_color        =   get_theme_mod( 'mv_read_more_color' );
    wp_add_inline_style( 
        'mv_custom', 
        'a.more-link{ color:' . $read_more_color . '; border-color:' . $read_more_color . '; }'  
    );

    wp_register_script( 'mv_plugins', $uri . '/assets/js/plugins.js', [], $ver, true );
    wp_register_script( 'mv_functions', $uri . '/assets/js/functions.js', [], $ver, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'mv_plugins' );
    wp_enqueue_script( 'mv_functions' );


}