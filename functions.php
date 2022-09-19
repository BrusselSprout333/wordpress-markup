<?php 
    add_action('wp_enqueue_scripts', 'add_scrypts_and_styles'); //подключение в нужный момент
    add_theme_support('custom-logo');

    function add_scrypts_and_styles(){ //подключаемся css и js
        wp_deregister_script('jquery'); //удаляем автоподкл
        wp_register_script('jquery', get_template_directory_uri(). '/assets/js/jquery-3.6.1.min.js',
            false, null, true); //посл - размещение (header/footer)
        wp_enqueue_script('jquery'); //настраиваем свое размещение
        wp_register_script('swiper-script', get_template_directory_uri(). '/assets/js/swiper-bundle.min.js',
            false, null, 'footer');
        wp_enqueue_script('main', get_template_directory_uri(). '/assets/js/main.js', 
        array('jquery', 'swiper-script'), null, 'footer');

        wp_enqueue_style('fontello', get_template_directory_uri(). '/assets/css/fontello.css');
        wp_enqueue_style('swiper-style', get_template_directory_uri(). '/assets/css/swiper-bundle.min.css');
        wp_enqueue_style('main', get_stylesheet_uri(), array('fontello', 'swiper-style'));
    }

