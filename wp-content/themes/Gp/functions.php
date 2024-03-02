<?php

// logo add
function nsd_customizar_register($wp_customize){
	$wp_customize->add_section('nsd_header_area', array(
	  'title' =>__('Header Area', 'nsdhossain'),
	  'description' => 'If you interested to update your header area, you can do it here.'
	));
  
	$wp_customize->add_setting('nsd_logo', array(
	  'default' => get_bloginfo('template_directory') . '/img/logo.png',
	));
  
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'nsd_logo', array(
	  'label' => 'Logo Upload',
	  'description' => 'If you interested to change or update your logo you can do it.',
	  'setting' => 'nsd_logo',
	  'section' => 'nsd_header_area',
	) ));
  
   };
   add_action('customize_register', 'nsd_customizar_register');




	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'nsd' ),
	    	'footer_menu'  => __( 'Footer Menu', 'nsd' ),
			'footer_menu1'=> __( 'Footer Menu 1','nsd'),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu' );


	


	// custom posts
	include_once('custom-posts.php');
	include_once('footer-widgets.php');
