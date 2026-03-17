<?php 
/**
 * adding active class for active menu item 
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


//adding custom class into sub menu ul
function my_nav_menu_submenu_css_class( $classes ) {
  $classes[] = 'l-dropdown';
  return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );

//parrent a class
function add_classname_to_parent_nav_link($atts, $item) {
  // add class only on parent
  //if($item->menu_item_parent == 0) {
  //    $atts['class'] = 'header__nav-link';
  //}   
  if ( in_array('current_page_item', $item->classes) ) {
    $atts['class'] = 'header__nav-link active_link';
  } else {
    $atts['class'] = 'header__nav-link';
  }
  return $atts;   
}
add_filter('nav_menu_link_attributes', 'add_classname_to_parent_nav_link', 10, 2);


?>