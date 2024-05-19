
<!--  Подключение стилей и скриптов -->
<?php
// Хук wp_enqueue_scripts во время собития add_action будет сробатывать наш скрипт childhood_styles и childhood_scripts
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

// описиваем функцию динамических подключений стилей
function childhood_styles() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
}

// описиваем функцию динамических подключений скриптов
function childhood_scripts() {
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}
?>