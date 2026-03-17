<?php

function count_child($taxonomy, $parent){
    $terms = get_terms($taxonomy, array('parent' => $parent, 'hide_empty' => false, 'orderby'    => 'name'));
    return count($terms);
}


function custom_taxonomy_walker( $taxonomy, $parent = 0, $type=null ){
    $terms = get_terms($taxonomy, array('parent' => $parent, 'hide_empty' => false, 'orderby'    => 'name'));
    //If there are terms, start displaying
    if(count($terms) > 0)
    {
        
        if($type!="child"){
            $ulclass = "proj-listing__content";
            $liclass = "proj-listing__item";
            $aclass  = "proj-lisitng__link";
        }else {
            $ulclass = "l-dropdown__list";
            $liclass = "l-dropdown__item";
            $aclass  = "";
        }
        //Displaying as a list
        $out = "<ul class=".$ulclass.">";
        //Cycle though the terms
        foreach ($terms as $term)
        {
            //Secret sauce.  Function calls itself to display child elements, if any
            $child = count_child($taxonomy, $term->term_id);
            if($child){
                $out .="<li class='term term-" . $term->slug ." ".$liclass."'>" . 
                "<a class='".$aclass." l-dropdown' href='javascript:void(0)' data-term_id='" . $term->term_id . "' data-tax='". $taxonomy ."'> " . 
                        $term->name ."</a>".
                        custom_taxonomy_walker( $taxonomy, $term->term_id, 'child' ) . 
                "</li>"; 

            } else {
                $out .="<li class='term term-" . $term->slug ." ".$liclass."'>" . 
                "<a class='".$aclass."' href='javascript:void(0)' data-term_id='" . $term->term_id . "' data-tax='". $taxonomy ."'> " . 
                $term->name .
                "</a>".
                custom_taxonomy_walker( $taxonomy, $term->term_id, 'child' ) . 
                "</li>"; 
            }
            
        }
        $out .= "</ul>";    
        return $out;
    }
    return;
}
?>