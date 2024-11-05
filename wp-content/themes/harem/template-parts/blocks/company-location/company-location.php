<?php
/**
 * Company location Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$company = get_field('company', 'options');
?>

<section class="section section--iframe">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-4">
                <div class="custom-panel custom-panel--info">
                    <h2 class="mb-4"><?= __('Contact information', 'harem') ?></h2>
                    <div class="company">
                        <?php if($company['contact_number']) { ?>
                        <div class="company__info">
                            <div class="title"><?= __('Contact number', 'harem'); ?></div>
                            <div class="value"><?= $company['contact_number']; ?></div>
                        </div>
                        <?php } ?>
                        <?php if($company['email']) { ?>
                        <div class="company__info">
                            <div class="title"><?= __('Email address', 'harem'); ?></div>
                            <div class="value"><a href="mailto:<?= $company['email']; ?>"><?= $company['email']; ?></a></div>
                        </div>
                        <?php } ?>
                        <?php if($company['address']) { ?>
                        <div class="company__info">
                            <div class="title"><?= __('Office address', 'harem'); ?></div>
                            <div class="value rich-text"><?= $company['address']; ?></div>
                        </div>
                        <?php } ?>
                        <?php if($company['office_hours']) { ?>
                        <div class="company__info">
                            <div class="title"><?= __('Office hours', 'harem'); ?></div>
                            <div class="value"><?= $company['office_hours']; ?></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($company['google_map_location_embed_code']) { ?>
        <?php echo $company['google_map_location_embed_code']; ?>
    <?php } ?>
</section>