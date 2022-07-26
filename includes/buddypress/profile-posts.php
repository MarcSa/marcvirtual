<?php

function mv_recent_recipes_tab(){
    add_action( 'bp_template_title', 'mv_buddypress_recent_post_title' );
    add_action( 'bp_template_content', 'mv_buddypress_post_content' );
    bp_core_load_template(
        apply_filters( 'bp_core_template_plugin', 'members/single/plugins' )
    );
}

function mv_buddypress_recent_post_title(){
    ?><div class="text-center">My Recipes</div><?php 
}
function mv_buddypress_post_content(){
    $profile_user_id            =   bp_displayed_user_id();

    if ( !$profile_user_id ){
        return;
    }

    $posts                      =   new WP_Query([
        'author'                =>  $profile_user_id,
        'posts_per_page'        =>  10,
        'post_type'             =>  'recipe'
    ]);

    if ( $posts->have_posts() ) {
        ?>
        <div id="posts" class="row justify-content-md-center">
            <div class="col-md-8">
                <?php
                while( $posts->have_posts() ){
                    $posts->the_post();
                    get_template_part( 'partials/post/content-excerpt' );

                }?>
            </div>
        </div>
        <?php
        wp_reset_postdata();
    }
}