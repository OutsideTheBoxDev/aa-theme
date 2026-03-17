<?php
    $headers = [];
    if ($args['headers']) {
        $headers = $args['headers'];
    }
    echo '<div class="qp-c-row data-header">';
    echo '<div class="qp-c-desc"></div>';
    foreach($headers as $key => $title) {
        $class = "qp-c-info";
        if($key == 1) {
            $class = $class . " primary";
        }
        echo '<div class="'.$class .'"><p>'.$title.'</p></div>';
    }
    echo '</div>';
?>