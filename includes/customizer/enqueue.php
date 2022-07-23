<?php 

function mv_customize_preview_init(){
    wp_enqueue_script(
        'mv_themecustomizer',
        get_theme_file_uri( '/assets/js/theme-customize.js' ),
        [ 'jquery', 'customize-preview' ],
        false,
        true
    );
}
