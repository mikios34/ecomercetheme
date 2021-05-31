<?php

function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri().'/style.css','',1,'all');
    wp_enqueue_style('stylesheet');

}

add_Action('wp_enqueue_scripts','load_stylesheets');