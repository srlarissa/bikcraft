//Funções para limpar o header

<?php

    //Resets:
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0 );
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'adjacent_post_rel_link_wp_head', 10, 0 );
    remove_action('wp_head', 'feed_link_extra', 3 );
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7  );
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_styles');

    //Habilitar suporter a menu:
    add_theme_support('menu');

    //Função para as imagens terem tamanhos customizaveis:
    function my_custom_sizes(){
        add_image_size('large', 1400, 380, true );
        add_image_size('medium', 768, 380, true );
    }
    add_action('after_setup_theme', 'my_custom_sizes');
?>