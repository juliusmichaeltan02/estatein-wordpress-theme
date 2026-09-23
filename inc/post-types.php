<?php
/**
 * Custom Post Types.
 *
 * @package Estatein
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register FAQ Custom Post Type.
 */
function estatein_register_faq_post_type() {

    $labels = array(
        'name'                  => __( 'FAQs', 'estatein' ),
        'singular_name'         => __( 'FAQ', 'estatein' ),
        'menu_name'             => __( 'FAQs', 'estatein' ),
        'name_admin_bar'        => __( 'FAQ', 'estatein' ),
        'add_new'               => __( 'Add New', 'estatein' ),
        'add_new_item'          => __( 'Add New FAQ', 'estatein' ),
        'new_item'              => __( 'New FAQ', 'estatein' ),
        'edit_item'             => __( 'Edit FAQ', 'estatein' ),
        'view_item'             => __( 'View FAQ', 'estatein' ),
        'all_items'             => __( 'All FAQs', 'estatein' ),
        'search_items'          => __( 'Search FAQs', 'estatein' ),
        'not_found'             => __( 'No FAQs found.', 'estatein' ),
        'not_found_in_trash'    => __( 'No FAQs found in Trash.', 'estatein' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-editor-help',
        'supports'           => array(
            'title',
            'page-attributes',
        ),
        'has_archive'        => false,
        'publicly_queryable' => false,
        'rewrite'            => false,
        'show_in_rest'       => true,
    );

    register_post_type( 'faq', $args );
}

add_action( 'init', 'estatein_register_faq_post_type' );

/**
 * Register Testimonials Custom Post Type.
 */
function estatein_register_testimonial_post_type() {

    $labels = array(
        'name'               => __( 'Testimonials', 'estatein' ),
        'singular_name'      => __( 'Testimonial', 'estatein' ),
        'menu_name'          => __( 'Testimonials', 'estatein' ),
        'name_admin_bar'     => __( 'Testimonial', 'estatein' ),
        'add_new'            => __( 'Add New', 'estatein' ),
        'add_new_item'       => __( 'Add New Testimonial', 'estatein' ),
        'new_item'           => __( 'New Testimonial', 'estatein' ),
        'edit_item'          => __( 'Edit Testimonial', 'estatein' ),
        'view_item'          => __( 'View Testimonial', 'estatein' ),
        'all_items'          => __( 'All Testimonials', 'estatein' ),
        'search_items'       => __( 'Search Testimonials', 'estatein' ),
        'not_found'          => __( 'No testimonials found.', 'estatein' ),
        'not_found_in_trash' => __( 'No testimonials found in Trash.', 'estatein' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array(
            'title',
            'page-attributes',
        ),
        'has_archive'        => false,
        'publicly_queryable' => false,
        'rewrite'            => false,
        'show_in_rest'       => true,
    );

    register_post_type( 'testimonial', $args );
}

add_action( 'init', 'estatein_register_testimonial_post_type' );

/**
 * Register Properties Custom Post Type.
 */
function estatein_register_property_post_type() {

    $labels = array(
        'name'               => __( 'Properties', 'estatein' ),
        'singular_name'      => __( 'Property', 'estatein' ),
        'menu_name'          => __( 'Properties', 'estatein' ),
        'name_admin_bar'     => __( 'Property', 'estatein' ),
        'add_new'            => __( 'Add New', 'estatein' ),
        'add_new_item'       => __( 'Add New Property', 'estatein' ),
        'new_item'           => __( 'New Property', 'estatein' ),
        'edit_item'          => __( 'Edit Property', 'estatein' ),
        'view_item'          => __( 'View Property', 'estatein' ),
        'all_items'          => __( 'All Properties', 'estatein' ),
        'search_items'       => __( 'Search Properties', 'estatein' ),
        'not_found'          => __( 'No properties found.', 'estatein' ),
        'not_found_in_trash' => __( 'No properties found in Trash.', 'estatein' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-admin-home',
        'supports'           => array(
            'title',
            'page-attributes',
        ),
        'has_archive'        => true,
        'publicly_queryable' => true,
        'rewrite'            => array(
            'slug' => 'properties',
        ),
        'show_in_rest'       => true,
    );

    register_post_type( 'property', $args );
}

add_action( 'init', 'estatein_register_property_post_type' );