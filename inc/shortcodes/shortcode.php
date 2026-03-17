<?php 
function contact_number(){
    $phone = get_field('prphone','option');
    if($phone){
        $html = '<a href="tel:+1'.$phone.'">'.format_number($phone).'</a>';
    }
    return $html;

}
add_shortcode( 'contact-number', 'contact_number' );

function year_show(){
  return date('Y');
}
add_shortcode( 'year', 'year_show' );
?>