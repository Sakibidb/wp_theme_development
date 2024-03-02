<?php

//service
function nsd_theme_custom_post(){
    register_post_type("service", array(
        "public"=> true,
        "label"=> 'Service',
        'labels'=> array(
            'name'=> 'Services',
            'singular_name' =>'Service',
            'add_new'=> 'Add New Service'),
            'supports'=> array('title','editor', 'excerpt', 'thumbnail')
    ) );

//about
    register_post_type("about", array(
        "public"=> true,
        "label"=> 'About',
        'labels'=> array(
            'name'=> 'Abouts',
            'singular_name' =>'About',
            'add_new'=> 'Add New About'),
            'supports'=> array('title','editor', 'excerpt', 'thumbnail')
    ) );




//team
register_post_type("team", array(
    "public"=> true,
    "label"=> 'Team',
    'labels'=> array(
        'name'=> 'Teams',
        'singular_name' =>'Team',
        'add_new'=> 'Add New Team Member'),
        'supports'=> array('thumbnail', 'title','editor', 'excerpt')
) );
}


if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)

    add_image_size( 'about-thumb', 600, 500 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'service-thumb', 300, 600 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'team-thumb', 300, 300 ); // 300 pixels wide (and unlimited height)

}



add_action("init","nsd_theme_custom_post");
