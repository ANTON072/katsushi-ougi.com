<?php

add_action(
  'wp_enqueue_scripts',
  function () {

    wp_enqueue_style(
      'google-font',
      'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap',
      false,
      'v1.0.0'
    );

    wp_enqueue_style(
      'normalize',
      'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
      false,
      'v1.0.0'
    );

    wp_enqueue_style(
      'variables',
      get_template_directory_uri() . '/styles/variables.css',
      false,
      'v1.0.0'
    );

    wp_enqueue_style(
      'base',
      get_template_directory_uri() . '/styles/base.css',
      false,
      'v1.0.0'
    );

    wp_enqueue_style(
      'theme',
      get_template_directory_uri() . '/style.css',
      array(
        'google-font',
        'normalize',
        'variables',
        'base',
      ),
      'v1.0.0'
    );

    wp_deregister_script( 'jquery' );

    wp_enqueue_script(
      'jquery',
      'https://code.jquery.com/jquery-3.6.0.min.js',
      false,
      'v1.0.0',
      true
    );

    wp_enqueue_script(
      'theme',
      get_template_directory_uri() . '/scripts/common.js',
      array(
        'jquery'
      ),
      'v1.0.0',
      true
    );

  }
);

add_theme_support( 'title-tag' );