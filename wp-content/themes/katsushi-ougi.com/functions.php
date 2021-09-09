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
  }
);