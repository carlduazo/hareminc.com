<?php
    $image = $content['image'] ?: [];
    $size = $content['size'] ?: '12';
?>
<?php if($image) { ?>
<div class="section section--product-description">
    <div class="container">
        <div class="row row-gap-md justify-content-center">
            <div class="col-md-<?= $size; ?>">
                <img src="<?= $image['url']; ?>" class="border-radius-rounded">
            </div>
        </div>
    </div>
</div>
<?php } ?>