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
      VERSION
    );

    wp_enqueue_style(
      'base',
      get_template_directory_uri() . '/styles/base.css',
      false,
      VERSION
    );

    wp_enqueue_style(
      'utils',
      get_template_directory_uri() . '/styles/utils.css',
      false,
      VERSION
    );

    wp_enqueue_style(
      'theme',
      get_template_directory_uri() . '/style.css',
      array(
        'google-font',
        'normalize',
        'variables',
        'base',
        'utils',
      ),
      VERSION
    );

    wp_deregister_script('jquery');

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
      VERSION,
      true
    );
  }
);

add_theme_support('title-tag');

// セレクトボックスページナビ
function select_pagination($max_pages, $paged)
{

  if ($max_pages == 1) return;

  echo '<div class="p-pagination">';

  if ($paged != 1) {
    echo '<div class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">PREV</a></div>';
  }

  echo '<select name="page-select">';
  for ($i = 1; $i <= $max_pages; ++$i) {
    $selected = ($i == $paged) ? ' selected' : null;
    echo '<option value="' . esc_url(get_pagenum_link($i)) . '"' . $selected . '>' . $i . '</option>';
  }
  echo '</select>';

  if ($paged != $max_pages) {
    echo '<div class="next"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">NEXT</a></div>';
  }

  echo '</div>';
}
