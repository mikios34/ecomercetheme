<?php

function load_stylesheets(){
   
    wp_register_style('bootsrtap-core', get_template_directory_uri().'/assets/css/bootstrap.min.css','stylesheet', get_template_directory_uri().'/style.css','',1,'all');
    wp_register_style('stylesheet', get_template_directory_uri().'/style.css','',1,'all');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bootsrtap-core');
}

add_Action('wp_enqueue_scripts','load_stylesheets');

function load_javascript(){
    
    wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_register_script('custom',get_template_directory_uri().'/app.js','jquery',1,true);
    wp_enqueue_script('custom');
    wp_enqueue_script('bootstrap-js');
}
add_Action('wp_enqueue_scripts','load_javascript');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu'=>'Top Menu',
    )
);
//add_image_size('post_image',1100,750,true);

register_sidebar(
    array(
        'name'=>'Page Sidebar',
        'id'=>'page-sidebar',
        'class'=>'',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>',

    )
    );

    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


    $args= array(
        'width'                  => 1946,
        'height'                 => 200,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-image'=> get_template_directory_uri().'/assets/images/facial.jpg',
        'uploads'=> true

    );
    add_theme_support( 'custom-header', $args );

    add_theme_support( 'title-tag' );

    // Registering customiable section

    function frontpageheader($wp_customize){
        $wp_customize->add_section('header_image_section',array(
            'title'=>"Customize Header Image",
        ));
        $wp_customize->add_setting('header_image_setting',array(
            'default'=>'example headline text',
        ));
        $wp_customize->add_control(new Wp_Customize_Control( $wp_customize,'header_image_control',array(
            'label'=> 'Head Line',
            'section'=>'header_image_section',
            'settings'=>'header_image_setting'
        )));

        
        $wp_customize->add_setting('header_image_textarea',array(
            'default'=>'example headline text',
        ));
        $wp_customize->add_control(new Wp_Customize_Control( $wp_customize,'header_image_textarea_control',array(
            'label'=> 'Text Area',
            'section'=>'header_image_section',
            'settings'=>'header_image_textarea',
            'type'=>'textarea'
        )));


        $wp_customize->add_setting('header_image'
        );
        $wp_customize->add_control(new Wp_Customize_Cropped_Image_Control( $wp_customize,'header_background_image_control',array(
            'label'=> 'Background',
            'section'=>'header_image_section',
            'settings'=>'header_image',
            'width'=>2500,
            'height'=>900
        )));

    }
    add_action( 'customize_register', 'frontpageheader' );