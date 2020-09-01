<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu()
{
    register_nav_menu('top', 'Меню в шапке');
    add_theme_support( 'post-thumbnails', array( 'post' ) );
}

function style_theme()
{
    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    // регистрируем
    wp_register_script('jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true);
    wp_register_script('jquery', false, array('jquery-core'), null, true);

    // подключаем
    wp_enqueue_script('jquery');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/style.css');
}

function scripts_theme()
{
    //wp_enqueue_script('jquery', get_template_directory_uri() . "/assets/js/jquery.min.js");
    wp_enqueue_script('popper', get_template_directory_uri() . "/assets/js/popper.min.js");
    wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js");
    wp_enqueue_script('default', get_template_directory_uri() . "/assets/js/script.js");
}