<?php
function u_setup_theme() {
    add_theme_support('editor-styles'); // Allows loading CSS files in the Guttenberg Editor

    add_editor_style([ // No need to register and enqueue. Can handle absolute and local paths without need for the get_theme_file_uri function
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        'assets/bootstrap-icons/bootstrap-icons.css',
        'assets/public/index.css',
        'assets/editor.css'
    ]);
}