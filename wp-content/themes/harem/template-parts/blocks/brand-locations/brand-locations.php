<?php
/**
 * Brand Locations Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
global $post;
$background_color = get_field('background_color') ?: 'white';
$supertitle = get_field('supertitle') ?: '';
$supertitle_style = get_field('supertitle_style') ?: 'primary';
$title = get_field('title') ?: '';
$section_header_color = get_field('section_header_color') ?: 'white';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta') ?: [];
$cities = get_field('cities', $post->ID);

$location_map_default = '';
?>
<section class="section section--default section--<?= $background_color; ?>">
    <div class="container">
        <div class="section__header">
            <?php if($supertitle) { ?>
            <div class="section__supertitle">
                <?= $supertitle; ?>
            </div>
            <?php } ?>
            <?php if($title) { ?>
            <h2 class="section__title section__title">
                <?= $title; ?>
            </h2>
            <?php } ?>
            <?php if($text) { ?>
            <div class="section__text rich-text">
                <?= $text; ?>
            </div>
            <?php } ?>
        </div>
        <div class="locations tab-group js">
            <div class="row justify-content-center row-gap-md">
                <div class="col-md-2">
                    <div class="locations__cities">
                        <?php foreach($cities as $index => $city) { ?>
                            <div class="city js tab-title js <?php if($index == 0) { echo "tab-title-active"; } ?>" data-tab="<?= $index; ?>">
                                <?= $city['name']; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php if($cities) { ?>
                        <?php foreach($cities as $index_city => $city) { 
                            $locations = $city['locations'];
                        ?>
                            <div class="tab-content <?php if($index_city == 0) { echo "tab-content-active"; } ?>" data-tab="<?= $index_city; ?>">
                                <div class="accordion-group js accordion-group--locations">
                                    <?php if($locations) { ?>
                                        <?php foreach($locations as $index => $location) { 
                                            if($index_city == 0 && $index == 0) {
                                                $location_map_default = $location['google_map_embed'];
                                            }
                                        ?>
                                            <div class="accordion js <?php if($index== 0) { echo "accordion-active"; } ?>">
                                                <div class="accordion-title js">
                                                    <h3><?= $location['name']; ?></h3>
                                                    <i class="icon icon-plus"></i>
                                                    <textarea id="google_map" class="d-none">
                                                        <?= $location['google_map_embed']; ?>
                                                    </textarea>
                                                </div>
                                                <div class="accordion-content js" style="<?php if($index== 0) { echo "display: block;"; } ?>">
                                                    <div class="locations__meta">
                                                        <?php if($location['address']) { ?>
                                                        <div class="address rich-text">
                                                            <?= $location['address']; ?>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if($location['mobile_number']) { ?>
                                                        <div class="item">
                                                            <i class="icon icon-telephone"></i><?= $location['mobile_number']; ?>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if($location['telephone_number']) { ?>
                                                        <div class="item">
                                                            <i class="icon icon-telephone"></i><?= $location['telephone_number']; ?>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if($location['email']) { ?>
                                                        <div class="item">
                                                            <i class="icon icon-email"></i><?= $location['email']; ?>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if($location['operating_hours']) { ?>
                                                        <div class="item">
                                                            <i class="icon icon-clock"></i><?= $location['operating_hours']; ?>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-6">
                    <div class="locations__map">
                        <?= $location_map_default; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if($cta) { ?>
        <div class="section__cta">
            <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
        </div>
        <?php } ?>
    </div>
</section>