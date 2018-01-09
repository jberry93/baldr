<?php
$context = Timber::get_context();
$context['dynamic_sidebar'] = Timber::get_widgets('dynamic_sidebar');

Timber::render('index.twig', $context);
