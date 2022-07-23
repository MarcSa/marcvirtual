<?php 

function mv_widgets(){
    register_sidebar( [
        'name'          =>  __( 'First Theme Sidebar', 'marcvirtual' ),
        'id'            =>  'mv_sidebar',
        'description'   =>  __( 'Sidebar for MarcVirtual theme', 'marcvirtual' ),
        'before_widget' =>  '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'
    ] );
}

