<?php 

function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), false, 'all'); 
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri(). '/style.css', array(), false, 'all'); 
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function include_jquery()
{
    wp_deregister_script('JQuery');
    wp_enqueue_script('JQuery', get_template_directory_uri(). '/js/jQuery3.1.3.min.js', '', 1, true);
    
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri(). '/js/script.js', '', 1, true);
    wp_enqueue_script('customjs');


}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

register_nav_menus(

    array(

            'top-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),

    )
    );