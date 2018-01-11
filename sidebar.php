<?php
$context = Timber::get_context();
$context['menu'] = new TimberMenu();

Timber::render('partials/sidebar.twig', $context);
