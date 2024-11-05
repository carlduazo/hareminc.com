<?php
    $topbar_usps = get_field('topbar_usps', 'options');
?>

<div class="topbar">
    <div class="topbar__slider js owl-carousel">
        <?php 
            foreach($topbar_usps as $topbar_usp) {
                $icon = $topbar_usp['icon'];
                $text = $topbar_usp['text'];
        ?>  
            <div class="item">
            <?php if($icon) { ?>
                <img class="icon" src="<?= $icon; ?>" alt="<?= $text; ?>">
            <?php } ?>
            <span><?= $text; ?></span>
            </div>
        <?php
            }
        ?>
    </div>
</div>