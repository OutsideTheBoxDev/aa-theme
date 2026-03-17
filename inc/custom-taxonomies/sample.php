<?php 

//hook into the init action and call create_practice_area_taxonomy when it fires
 
add_action( 'init', 'create_practice_area', 0 );
 
//create a custom taxonomy name it practice area for our works
 
function create_practice_area() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Practice Areas', 'taxonomy general name' ),
    'singular_name' => _x( 'Practice Areas', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Practice Area' ),
    'all_items' => __( 'All Practice Area' ),
    'parent_item' => __( 'Parent Practice Area' ),
    'parent_item_colon' => __( 'Parent Practice Area:' ),
    'edit_item' => __( 'Edit Practice Area' ), 
    'update_item' => __( 'Update Practice Area' ),
    'add_new_item' => __( 'Add New Practice Area' ),
    'new_item_name' => __( 'New Practice Area' ),
    'menu_name' => __( 'Practice Areas' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('practice-area','project', array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => false,
    'public' => false,
    'rewrite' => array( 'slug' => 'practice-area','with_front' => false ),
  ));
 
}

?>