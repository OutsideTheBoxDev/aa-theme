<?php
//format telephone number 
function format_number($phone){
    $result = array();
    if($phone){
    	$result['phone'] = substr($phone, 0, 3).' '.substr($phone, 3, 3).' '.substr($phone,6);
        $result['call'] = '+1'.$phone;
    }
	return $result;
}
?>