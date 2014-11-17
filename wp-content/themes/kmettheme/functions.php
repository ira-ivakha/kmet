<?php

function kmet_setup()
{
    add_theme_support('automatic-feed-links');

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150, true);
    add_image_size('full-width', 1038, 576, true);
    add_image_size('small-thumbnail', 80, 80, true);

}

add_action('after_setup_theme', 'kmet_setup');

function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//menus
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
register_nav_menus(array(

	'topmenu_left' => 'Left Top Menu',
	'topmenu_right' => 'Right Top Menu',
	'footermenu' => 'Footer Menu'
));

//widgets - search

if (function_exists('register_sidebars')) {

    register_sidebar(array(
        'name' => 'Footer Menu',
        'id' => 'footermenu',
        'before_widget' => '<ul class="project-menu sales-menu">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));


    $args = array(
        'name' => __('Right Top Menu'),
        'id' => 'right-top',
        'description' => '',
        'class' => '',
        'before_widget' => '',
        'after_widget' => '');
    register_sidebar($args);


    $args = array(
        'name' => __('Left Top Menu'),
        'id' => 'left-top',
        'description' => '',
        'class' => '',
        'before_widget' => '',
        'after_widget' => '');
    register_sidebar($args);

}

add_theme_support('post-thumbnails');

//custom sidebar


?>