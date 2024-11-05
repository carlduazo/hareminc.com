<?php
    $supertitle = $content['supertitle'] ?: '';
    $supertitle_style = $content['supertitle_style'] ?: 'secondary';
    $title = $content['title'] ?: '';
    $section_header_color = $content['section_header_color'] ?: 'dark';
    $text = $content['text'] ?: '';
    $cta_style = $content['cta_style']  ?: 'primary';
    $cta = $content['cta'] ?: [];
?>
<div class="section section--product-description">
    <div class="container">
        <div class="row row-gap-md">
            <div class="col-md-12">
                <div class="section__header mb-0 section__header--<?= $section_header_color; ?>">
                    <?php if($supertitle) { ?>
                    <div class="section__supertitle section__supertitle--primary">
                        <?= $supertitle; ?>
                    </div>
                    <?php } ?>
                    <?php if($title) { ?>
                    <div class="section__title section__title">
                        <?= $title; ?>
                    </div>
                    <?php } ?>
                    <?php if($text) { ?>
                    <div class="section__text rich-text">
                        <?= $text; ?>
                    </div>
                    <?php } ?>
                    <?php if($cta) { ?>
                    <div class="section__cta">
                        <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>