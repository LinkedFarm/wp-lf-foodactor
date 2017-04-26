<?php
/** Register Food Food Actor Post Type
 *
 * Note this is post about foaf:Agent i.e. one post should link to only one foaf:Agent URI
 *
 * WP taxonomies represent actual OFD types/Concepts
 * they are expected to have 0 to many URI values
 *
 */

function lf_add_post_type_food_actor()
{
    // Register food_actor type
    $labels = array(
        'name' => _x('Food Actor Category', 'taxonomy general name', THEMENAME),
        'singular_name' => _x('Food Actor Category', 'taxonomy singular name', THEMENAME),
        'search_items' => __('Search Food Actor Category', THEMENAME),
        'all_items' => __('All Food Actor Category', THEMENAME),
        'parent_item' => __('Parent Food Actor Category', THEMENAME),
        'parent_item_colon' => __('Parent Food Actor Category:', THEMENAME),
        'edit_item' => __('Edit Food Actor Category', THEMENAME),
        'update_item' => __('Update Food Actor Category', THEMENAME),
        'add_new_item' => __('Add New Food Actor Category', THEMENAME),
        'new_item_name' => __('New Food Actor Category Name', THEMENAME),
        'menu_name' => __('Food Actor Category', THEMENAME),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'food_actor_type'),
    );

    if (function_exists('register_taxonomy')) {
        register_taxonomy('food_actor_type', array('food_actor'), $args);
    }



    //Register post type food_actor
    $labels = array(
        'name' => _x('Food Actor', 'Post Type General Name', THEMENAME),
        'singular_name' => _x('Food Actor', 'Post Type Singular Name', THEMENAME),
        'menu_name' => __('Food Actor', THEMENAME),
        'parent_item_colon' => __('Parent:', THEMENAME),
        'all_items' => __('All Food Actors', THEMENAME),
        'view_item' => __('View Food Actor', THEMENAME),
        'add_new_item' => __('Add New Food Actor', THEMENAME),
        'add_new' => __('Add New Food Actor', THEMENAME),
        'edit_item' => __('Edit Food Actor', THEMENAME),
        'update_item' => __('Update Food Actor', THEMENAME),
        'search_items' => __('Search Food Actors', THEMENAME),
        'not_found' => __('Not found', THEMENAME),
        'not_found_in_trash' => __('Not found in Trash', THEMENAME),
    );
    $args = array(
        'label' => __('Food Actor', THEMENAME),
        'description' => __('Food Actor Description', THEMENAME),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments'),
        'taxonomies' => array('food_actor_type', 'food_actor_service'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 2,
        'menu_icon' => 'dashicons-universal-access',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        //'rest_controller_class' => 'WP_REST_Meta_Posts2_Controller'
    );

    if (function_exists('register_post_type')) {
        register_post_type('food_actor', $args);
    }

}

// Hook into the 'init' action
add_action('init', 'lf_add_post_type_food_actor', 0);
