<?php                                                                  
add_action('init', 'partners' );
function partners() {
    $labels = array( 
        'name' => 'Partners',
        'singular_name' => 'Partners',
        'add_theme' => 'Add Partners',
        'add_theme_item' => 'Add New Partners',
        'edit_item' => 'Edit Partners',
        'theme_item' => 'Our Partners',
        'view_item' => 'View Partners',
        'search_items' => 'Search Partners',
        'not_found' => 'No Partners found',
        'not_found_in_trash' => 'No Partners found in Trash',
        'parent_item_colon' => 'Parent Partners:',
        'menu_name' => 'Partners',
		
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'partners',
        'supports' => array('title', 'thumbnail','editor'),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-businessperson',
        'menu_position' => 8,  
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'feeds' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'with_front'  => false
		
    );
    register_post_type('partners', $args);     
}

?>