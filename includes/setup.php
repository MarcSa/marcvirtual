<?php 

function mv_setup_theme(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'starter-content', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'starter-content', [
        'widgets'                   =>  [
            'mv_sidebar'            =>  [
                'text_business_info', 'search', 'text_about',
            ],
        ],
        'attachements'              =>  [
            'image-about'           =>  [
                'post_title'        =>  __( 'About', 'marcvirtual' ), 
                'file'              =>  'assets/images/about/1.jpg'
            ],
        ],
        'posts'                     =>  [
            'home'                  =>  array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'about'                 =>  array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'contact'               =>  array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'blog'                  =>  array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'homepage-section'      =>  array(
                'thumbnail'         =>  '{{image-about}}'
            ),
        ],
        'options'                   =>  [
            'show_on_front'         =>  'page',
            'page_on_front'         =>  '{{home}}',
            'page_for_posts'        =>  '{{blog}}',
        ],
        'theme_mods'                =>  [
            'mv_facebook_handle'    =>  'marcvirtual',
            'mv_twitter_handle'     =>  'marcvirtual',
            'mv_instagram_handle'   =>  'marcvirtual',
            'mv_email'              =>  'marcvirtual',
            'mv_phone_number'       =>  'marcvirtual',
            'mv_header_show_search' =>  'yes',
            'mv_header_show_cart'   =>  'yes',
        ],
        'nav_menus'                 =>  [
            'primary'               =>  array(
                'name'              =>  __( 'Primary Menu', 'marcvirtual' ),
                'items'             =>  array(
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
            'secondary'             =>  array(
                'name'              =>  __( 'Secondary Menu', 'marcvirtual' ),
                'items'             =>  array(
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
        ],
    ] );

    register_nav_menu( 'primary', __( 'Primary Menu', 'marcvirtual' ) );
    register_nav_menu( 'secondary', __( 'Secondary Menu', 'marcvirtual' ) );

    if (function_exists('quads_register_ad')){
        quads_register_ad( array(
            'location'      =>  'marcvirtual_header', 
            'description'   =>  'Marcvirtual Header position') 
        );
    }
}
