<?php
/**
 * Theme Functions
 * Setup styles, scripts, menus, and other theme features.
 */

// Enqueue styles including Tailwind CSS
function bhanart_enqueue_styles() {
    // Enqueue main theme stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style("corben", "https://fonts.googleapis.com/css2?family=Corben:wght@400;700&display=swap" );
    wp_enqueue_style("poppins", "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" );
    wp_enqueue_style("fraunces", "https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap" );
    wp_enqueue_style("ibm-flex-sans", "https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" );
    wp_enqueue_style("raleway", "https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" );
    wp_enqueue_style("inter", "https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" );

    wp_enqueue_script('react-modal',get_template_directory_uri() . '/build/index.js',[],filemtime(get_template_directory() . '/build/index.js'),true);



    // Correct path and URL for Tailwind output.css
    $tailwind_path = get_template_directory() . '/public/css/output.css';
    $tailwind_url  = get_template_directory_uri() . '/public/css/output.css';

    if (file_exists($tailwind_path)) {
        wp_enqueue_style('tailwind', $tailwind_url, array(), filemtime($tailwind_path));
    } else {
        error_log('Tailwind CSS file not found at: ' . $tailwind_path);
    }
}
add_action('wp_enqueue_scripts', 'bhanart_enqueue_styles');


