<?php

if ( !function_exists('doula_theme_setup')){
  // Theme setup
  function doula_theme_setup(){
    load_theme_textdomain('doula', get_template_directory() . '/languages');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
      )
      );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus(
      array(
        'primary' => esc_html__('Primary Menu', 'doula')
      )
      );

    function add_link_atts($atts) {
      $atts['class'] = "link link--dark";
      return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_link_atts');

    function add_additional_class_on_li($classes, $item, $args) {
      if(isset($args->add_li_class)) {
          $classes[] = $args->add_li_class;
      }
      return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
  }
}

add_action('after_setup_theme', 'doula_theme_setup');

function doula_assets() {
  wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', array(), false, 'all');

  wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), false, 'all');

  wp_enqueue_style( 'stylesheet', get_stylesheet_uri('assets/css/style.css'), array(), '1.01', 'all');

  wp_enqueue_script( 'myScript', get_theme_file_uri('assets/js/script.js'), array(), false, true );
}

add_action('wp_enqueue_scripts', 'doula_assets');