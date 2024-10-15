<?php

// Ajout - Scripts (Modales Accueil - Page Photo Unique - Menu Burger)
function enqueue_custom_scripts() {
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.1.1', true);
   }
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


function register_my_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
    }
add_action( 'init', 'register_my_menu' );



//Affichage de LOGO

function theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, 
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_setup');
