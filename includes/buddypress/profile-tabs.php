<?php 

function mv_buddypress_profile_tabs(){

    if ( !mv_plugin_activated_check( 'recipe/index.php' ) ) {
        return;
    }

    global $bp;

    bp_core_new_nav_item([
        'name'                      =>  esc_html__( 'Recipes', 'marcvirtual' ),
        'slug'                      =>  'recipes',
        'position'                  =>  100,
        'screen_function'           =>  'mv_recent_recipes_tab',
        'show_for_displayed_user'   =>  true,
        'item_css_id'               =>  'mv_user_recipes',
        'default_subnav_slug'       =>  'recipes'  
    ]);
}