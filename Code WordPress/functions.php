<?php

show_admin_bar(false);
add_theme_support('post-thumbnails');
add_theme_support('menus');
register_nav_menu('header1', 'En tête du menu');
register_nav_menu('header2', 'En tête du menu2');	
register_nav_menu('Burger', 'En tête du menu3');

function init_scripts() {
    // style css
	wp_enqueue_style( 'flowbite', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css', array());
	wp_enqueue_style('global-style', get_template_directory_uri().'/src/output.css', [], null, 'all');
	wp_enqueue_style('game', get_template_directory_uri().'/game/style.css', [], null, 'all');

    // lib js
	wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com', array());
	wp_enqueue_script( 'flowbite', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js', array(), null, true);
	
	// lib js JEUX
	wp_enqueue_script( 'p5', get_template_directory_uri().'/game/lib/p5.min.js', array(), null, true);

	wp_enqueue_script( 'p5', get_template_directory_uri().'/game/lib/p5.sound.min.js', array(), null, true);
	
	wp_enqueue_script( 'p5', get_template_directory_uri().'/game/lib/p5play.min.js', array(), null, true);

	wp_enqueue_script( 'planck', get_template_directory_uri().'/game/lib/planck.js', array(), null, true);


	// script js

	wp_enqueue_script( 'cake', get_template_directory_uri().'/game/cake.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'init_scripts' );
add_action('wp_enqueue_style', 'init_scripts');
add_filter('nav_menu_css_class','montheme_menu_class');

function montheme_menu_class($classes)
{
	$classes[] = 'transition-all hover:text-clrtextsection hover:underline';
	return $classes;
}

// function add_new_to_nav($nav_menu, $args) {
// 	if ($args->theme_location == 'header') :

// 		$nav_menu .= '
			
		
		
// 		';
	
// 	endif;

// 	return $nav_menu;
// }
// add_filter('wp_nav_menu', 'add_new_to_nav', 10, 2);

