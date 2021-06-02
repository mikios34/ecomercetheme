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


    function arphabet_widgets_init() {

        register_sidebar( array(
            'name'          => 'page sidebar',
            'id'            => 'page-sidebar',
            'before_widget' => '<div class="py-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="font-italic">',
            'after_title'   => '</h4>',
        ) );
    
    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );

?>