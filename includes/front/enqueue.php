<?php

function u_enqueue(){
    wp_register_style(
        'u_font_rubik_and_pacifico',
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap', // From the static index.html's <head>
        [], // We pass an empty array to be able to pass a fourth parameter
        null // We send null to disable the version query parameter
    );
    wp_register_style(
        'u_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css') // From the static index.html's <head>
        // We need the function to generate an http URL, because it's not a valid URL, but a relative path
    );
    wp_register_style(
        'u_theme',
        get_theme_file_uri('assets/public/index.css') // From the static index.html's <head>
        // A third argument is an array of dependencies and it's NOT required
    );   

    wp_enqueue_style('u_font_rubik_and_pacifico');
    wp_enqueue_style('u_bootstrap_icons');
    wp_enqueue_style('u_theme');
}