<?php
    $yes_icon = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 19C14.9705 19 19 14.9705 19 10C19 5.02944 14.9705 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9705 5.02944 19 10 19Z" fill="#469749"/><path d="M6 9.57143L9.27273 13L15 7" stroke="#F4F5F7" stroke-width="2" stroke-linejoin="round"/></svg>';
    $no_icon = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 10H15" stroke="#D64E45" stroke-width="2" stroke-linejoin="round"/><path d="M18 10C18 14.4183 14.4183 18 10 18C5.58173 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58173 18 10Z" stroke="#D64E45" stroke-width="2" stroke-linejoin="round"/></svg>';
    
    $label = "";
    if ($args['label']) {
        $label = $args['label'];
    }
    $data = [];
    if ($args['data']) {
        $data = $args['data'];
    }
?>

<div class="qp-c-row">
    <div class="qp-c-desc">
        <?php if(isset($label)){ echo '<p>'.$label.'</p>'; } ?>
    </div>
    <?php 
    foreach($data as $key => $d) {
        $class = "qp-c-info";
        if($key == 1) {
            $class = $class . " primary";
        }
        $content = $d;
        if($d == '_y'){
            $content = $yes_icon;
        } else if($d == '_n'){
            $content = $no_icon;
        }
        echo '<div class="'.$class .'"><span>'.$content.'</span></div>';
    }
    ?>
</div>