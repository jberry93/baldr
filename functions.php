<?php
function baldr_enqueue_scripts() {
  wp_enqueue_script(
    'js-bundle',
    get_template_directory_uri() . '/dist/baldr.min.js',
    array(),
    null
  );
}
add_action('wp_enqueue_scripts', 'baldr_enqueue_scripts');

function baldr_enqueue_styles() {
  wp_enqueue_style(
    'css-bundle',
    get_template_directory_uri() . '/dist/baldr.min.css',
    array(),
    null
  );
}
add_action('wp_enqueue_scripts', 'baldr_enqueue_styles');
