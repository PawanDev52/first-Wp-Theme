<?php

function learningWordpress_resources()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordpress_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

// Get top ancestor
function get_top_ancestor_id(){
    
}
?>