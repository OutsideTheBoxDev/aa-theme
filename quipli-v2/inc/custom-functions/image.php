<?php 
 /**
  * Return value: image id
  * Expecting parameter: image url
  */
function image_from_url($url){
    $feature_id = attachment_url_to_postid($url);
    return $feature_id;
}

 /**
  * Return value: image url
  * Expecting parameter: image id
  */
function image_from_id($id){
    $post_image_url = wp_get_attachment_image_src($id,$size = 'full');
    $url 	= $post_image_url[0];
    return $url;
}


/**
 * imgid            = id of the image
 * url              = url of the image
 * id               = attribute id
 * class            = attribute class
 * set              = src set. No for disbale src set. 
 * lazy              = lazy load. No for disbale lazy load. 
 * type             = Image type. Image tag wrapper will change. Possiblities Picture, Figure. In picture we can pass mobile image and desktop image urls.
 * size             = Expecting values no or yes. If no then the explicit height width removed. Default no
 * anim             = Animation attributes. Expecting full animation string
 * wrapper_class    = class of the image wrapper. Only if we have wrapper for image tag
 * murl             = mobile image url. Only for type = picture 
 */

 function get_image($data){
    if (array_key_exists("imgid",$data)){
        $id     = $data['imgid'];
    } else {
        $id = '';
    }
    
    if (array_key_exists("url",$data)){
        $url    = $data['url'];
    }  else {
        $url = '';
    } 
    
    if($url){
        $id = image_from_url($url);
    }

    if($id){
        $url = image_from_id($id);
    }
    
    if($url && $id){
        if (array_key_exists("id",$data)){
            $img_id    = $data['id'];
        } else { $img_id = '';}

        if (array_key_exists("class",$data)){
            $img_class = $data['class'];
        } else {
            $img_class = '';
        }
        
        if (array_key_exists("set",$data)){
            $img_set   = $data['set'];
        } else {
            $img_set = '';
        }
        
        if (array_key_exists("lazy",$data)){
            $img_lazy  = $data['lazy'];
        } else {
            $img_lazy = '';
        }
        
        if (array_key_exists("type",$data)){
            $img_type  = $data['type'];
        } else {
            $img_type = '';
        }
       
        if (array_key_exists("size",$data)){
            $img_size  = $data['size'];
        } else {
            $img_size = '';
        }

        if (array_key_exists("anim",$data)){
            $img_anim  = $data['anim'];
        }  else {
            $img_anim = '';
        }    
       

        $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
        if(!$image_alt){
            $image_alt = get_the_title($id);
        } 
        
        if($img_set == 'no'){
            $image_srcset = '';
        } else {
            $image_srcset = wp_get_attachment_image_srcset( $id, 'full');
        }

        if($img_lazy=='no'){
            $lazy = '';
        } else {
            $lazy = 'loading="lazy"';
        }
        $image_attributes = wp_get_attachment_image_src($id,'full');
        if($img_size=='no'){
            $h = '';
            $w = '';
        } else {
            $h = $image_attributes[2];
            $w = $image_attributes[1];
        }

        if($img_anim){
            $anim = $img_anim;
        } else {
            $anim = '';
        }
        if($img_type == 'banner'){
            if (array_key_exists("murl",$data)){
                $mobile_url  = $data['murl'];
            } else {
                $mobile_url = '';
            }

            if (array_key_exists("pclass",$data)){
                $picture_class = $data['pclass'];
            }  else {
                $picture_class = '';
            }          
            
            
            if(!$picture_class){
                $picture_class = 'hero__picture';
            }

            $result  ='<picture class="'.$picture_class.'">';
            if($mobile_url){               
                $result .='<source media="(min-width:991px)" srcset="'.$url.'">';
                $result .='<source media="(min-width:10px)" srcset="'.$mobile_url.'">';
            } else{
                $result .='<source media="(min-width:991px)" srcset="'.$url.'">';           
            }     
            
            $result .= '<img src="'.$url.'" alt="'.$image_alt.'" id="'.$img_id.'" class="'.$img_class.'">';
            $result .='</picture>';
        } else {
            $result = '<img src="'.$url.'" alt="'.$image_alt.'" id="'.$img_id.'" class="'.$img_class.'" srcset="'.$image_srcset.'" '.$anim.'>';
        }
        return $result;
    }

}

function featured_image($id){
    if($id){
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($id));
        $data = $this->image($feat_image);
        if($data){
            return $data;
        }            
    }
}

?>