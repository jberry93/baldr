<?php
// Notify user they must install Timber plugin if not already installed
if (!class_exists('Timber')) {
  add_action('admin_notices', function () {
		echo '<div>Timber is not activated. Make sure to activate the plugin in <a href="'
		. esc_url( admin_url( 'plugins.php#timber' ) )
		. '">' . esc_url( admin_url( 'plugins.php') )
		. '</a></div>';
	});

	add_filter('template_include', function ($template) {
		return get_stylesheet_directory() . '/static/no-timber.html';
	});

	return;
}

Timber::$dirname = array('templates', 'views');

class BaldrTheme extends TimberSite {
  function __construct() {
    add_action(
      'wp_enqueue_scripts',
      array($this, 'baldr_enqueue_scripts')
    );

    add_action(
      'wp_enqueue_scripts',
      array($this, 'baldr_enqueue_styles')
    );
  }

  function baldr_enqueue_scripts() {
    wp_enqueue_script(
      'js-bundle',
      get_template_directory_uri() . '/dist/bundle.js',
      array(),
      null
    );
  }

  function baldr_enqueue_styles() {
    wp_enqueue_style(
      'css-bundle',
      get_template_directory_uri() . '/dist/bundle.css',
      array(),
      null
    );
  }

  function add_to_twig($twig)
  {
    $twig->addExtension(new Twig_Extension_StringLoader());
    return $twig;
  }
}

new BaldrTheme();
