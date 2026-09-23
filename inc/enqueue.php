<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function estatein_enqueue_assets() {

    wp_enqueue_style(
        'estatein-urbanist',
        'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );    

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
        array(),
        '6.7.2'
    );

    wp_enqueue_style(
        'estatein-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );

    if ( is_page( 'about-us' ) ) {

        wp_enqueue_style(
            'estatein-about',
            get_template_directory_uri() . '/assets/css/about.css',
            array( 'estatein-main' ),
            '1.0.0'
        );
    }

    if ( is_page( 'contact-us' ) ) {

        wp_enqueue_style(
            'estatein-contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            array( 'estatein-main' ),
            '1.0.0'
        );
    }

    wp_enqueue_script(
        'estatein-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
}

add_action( 'wp_enqueue_scripts', 'estatein_enqueue_assets' );