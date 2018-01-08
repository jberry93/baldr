<?php
Timber::$dirname = array('templates', 'views');

class BaldrTheme extends TimberSite {
  function add_to_twig($twig)
  {
    $twig->addExtension(new Twig_Extension_StringLoader());
    return $twig;
  }
}

new BaldrTheme();
