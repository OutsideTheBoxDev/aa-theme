<?php
    $heading = null;
    if ($args['heading']) {
        $heading = $args['heading'];
    }
?>

<div class="qp-c-row data-info-header">
    <div class="qp-c-desc"></div>
    <div class="qp-c-heading">
        <?php if(isset($heading['title'])) { echo '<h2>'.$heading['title'].'</h2>'; }?>
        <?php if(isset($heading['subtitle'])) { echo '<h4>'.$heading['subtitle'].'</h4>'; }?>
        <?php if(isset($heading['description'])) {
            $descriptionLines = explode("\n", $heading['description']);
            foreach ($descriptionLines as $line) {
                echo "<p>" . $line . "</p>";
            }
        }?>
    </div>
</div>