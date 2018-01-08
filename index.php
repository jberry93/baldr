<?php
$context = Timber::get_context();
$context['hello_world'] = 'Hello World :D';

Timber::render('index.twig', $context);
