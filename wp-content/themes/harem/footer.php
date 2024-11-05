<?php 
  $company = get_field('company', 'options');
  $payment_icons = get_field('payment_icons', 'options');
  $description = $company['description'];
  $compliance = $company['compliance'];

  $social_media_links = get_field('social_media_links', 'options');
  $brands = get_field('brands', 'options');
?>

  <div class="ui page dimmer dimmer--media js">
      <div class="content content--video">
          <div class="video--bg">
              <iframe width="560" height="315" class="video--youtube"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
          </div>
      </div>
      <a class="dimmer__close">
          <svg width="20" height="20" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
      </a>
  </div>
  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <a href="<?= get_home_url(); ?>" class="footer__brand">
              <img src="<?php echo get_theme_file_uri().'/assets/public/images/harem-logo.svg'; ?>" alt="Harem logo" class="mb-0">
            </a>
            <div class="footer__desc">
              <?= $description; ?>
            </div>
            <div class="footer__compliance">
              <div class="footer__title">
                <?= __('Compliance', 'harem'); ?>
              </div>
              <?php if($compliance) { ?>
              <div class="compliance">
                <?php 
                  foreach($compliance as $compliance_item) {
                    $link = $compliance_item['link'] ?: '';
                    $logo = $compliance_item['logo'] ?: '';
                    $title = $compliance_item['title'] ?: '';
                ?>
                  <div class="compliance__item">
                    <a href="<?= $link; ?>">
                      <div class="image">
                        <img src="<?= $logo; ?>" alt="<?= $title; ?>">
                      </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="footer__links">
              <div class="footer__title">
                <?= __('Company links', 'harem'); ?>
              </div>
              <ul>
              <?php
                $footer_menu_items = get_menu_items_by_location('footer');
                $menu_items = filter_menu_items_by_parent($footer_menu_items, 0);

                foreach($menu_items as $menu_item) {
              ?>
                <li>
                  <a href="<?= $menu_item->url; ?>"><?= $menu_item->title; ?></a>
                </li>
              <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer__title">
              <?= __('Keep in touch', 'chaiwallah'); ?>
            </div>
            <div class="footer__company-details">
              <?php if($company['address']) { ?>
              <div class="item">
                <div class="item__icon item__icon--location">
                  <i class="icon icon-location"></i>
                </div>
                <div class="item__value"><?= $company['address']; ?></div>
              </div>
              <?php } ?>
              <?php if($company['email']) { ?>
              <div class="item">
                <div class="item__icon">
                  <i class="icon icon-email"></i>
                </div>
                <div class="item__value"><a href="mailto:<?= $company['email']; ?>"><?= $company['email']; ?></a></div>
              </div>
              <?php } ?>
              <?php if($company['contact_number']) { ?>
              <div class="item">
                <div class="item__icon">
                  <i class="icon icon-telephone"></i>
                </div>
                <div class="item__value"><a href="tel:<?= $company['contact_number']; ?>"><?= $company['contact_number']; ?></a></div>
              </div>
              <?php } ?>
            </div>
            <div class="footer__social">
                <div class="footer__title">
                  <?= __('Follow Harem', 'chaiwallah'); ?>
                </div>

                <div class="section__links">
                    <?php foreach($social_media_links as $social_media_link) { ?>
                        <a href="<?= $social_media_link['link']; ?>" class="button button--rounded button--social"><i class="icon icon-<?= $social_media_link['social_media']; ?>"></i></a>
                    <?php } ?>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer__title">
              <?= __('Our brands', 'chaiwallah'); ?>
            </div>
            <div class="footer__brands">
              <?php foreach($brands as $brand) { 
                $title = get_the_title($brand);
                $logo = get_field('logo', $brand);
                $brand_color = get_field('brand_color', $brand) ?: '#D99D02';
                $social_media_links = get_field('social_media_links', $brand);
              ?>
                <div class="item">
                  <div class="logo">
                    <img src="<?= $logo; ?>" alt="<?= $title; ?>">
                  </div>
                  <?php if($social_media_links) { ?>
                  <div class="section__links">
                    <?php foreach($social_media_links as $social_media_link) { ?>
                        <a href="<?= $social_media_link['link']; ?>" class="button button--rounded button--brand" style="--brand-color: <?= $brand_color; ?>;"><i class="icon icon-<?= $social_media_link['social_media']; ?>"></i></a>
                    <?php } ?>
                  </div>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__copyright">
      <div class="container">
        <div class="copyright">
          <?= __('Copyright &copy; Harem Incorporated').' '.date('Y'); ?> 
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
