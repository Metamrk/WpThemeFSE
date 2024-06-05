<?php
// Variable declarations

// Includes
include(get_theme_file_path('includes/front/enqueue.php')); // The file that contains the u_enqueue function
include(get_theme_file_path('includes/front/head.php'));
include(get_theme_file_path('includes/setup.php'));

// Hooks
add_action('wp_enqueue_scripts', 'u_enqueue'); // Runs a function (2nd. parameter) whenever an event (1st parameter) happens
add_action('wp_head', 'u_head', 5); // A third argument signals higher priority to load these before. (lower value == more priority)
add_action('after_setup_theme', 'u_setup_theme');