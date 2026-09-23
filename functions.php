<?php
/**
 * Estatein theme functions.
 *
 * @package Estatein
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function estatein_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'estatein' ),
        )
    );
}

add_action( 'after_setup_theme', 'estatein_setup' );

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/post-types.php';

add_action( 'after_setup_theme', 'estatein_setup' );