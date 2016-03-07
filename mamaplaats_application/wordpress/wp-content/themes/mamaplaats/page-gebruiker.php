<?php
wp_dequeue_style('mamaplaats_style');
wp_enqueue_style('gebruikers_form', get_stylesheet_directory_uri() . '/voordeelclub/css/voordeelclub.css');
get_header('voordeelclub');
echo a4y_user_profile();
get_template_part( 'footer', 'new' );