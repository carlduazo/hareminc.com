<div class="header__lasktop <?php if(is_front_page()) { echo "header__lasktop--transparent"; } ?>">
    <div class="container">
        <nav class="menu">
            <ul>
                <?php 
                    $primary_menu_items = get_menu_items_by_location('primary');
                    $menu_items = filter_menu_items_by_parent($primary_menu_items, 0);
                    foreach($menu_items as $menu_item) {
                        $submenu_items = filter_menu_items_by_parent($primary_menu_items, $menu_item->ID);
                        $has_submenu = count($submenu_items) > 0;        
                        $menu_wing = get_field('menu_wing_location', $menu_item->ID) ?: 'left';
                ?>
                <?php if($menu_wing == 'left') { ?>
                <li>
                    <a href="<?= $menu_item->url; ?>" target="<?= $menu_item->target; ?>"><?= $menu_item->title; ?></a>
                    <?php if ($has_submenu) { ?>
                    <i class="icon icon-angle-down"></i>
                    <div class="submenu">
                        <ul>
                            <?php
                                foreach ($submenu_items as $submenu_item) { 
                            ?>
                            <li>
                                <a href="<?php echo $submenu_item->url; ?>" target="<?= $submenu_item->target; ?>"><?php echo $submenu_item->title; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </li>
                <?php } ?>
                <?php } ?>
            </ul>
        </nav>
        <a href="<?= get_home_url(); ?>" class="header__brand">
            <?php if(is_front_page()) { ?>
            <img src="<?php echo get_theme_file_uri().'/assets/public/images/harem-logo.svg'; ?>" alt="Harem logo" class="mb-0">
            <?php } else { ?>
                <img src="<?php echo get_theme_file_uri().'/assets/public/images/harem-logo.svg'; ?>" alt="Harem logo" class="mb-0">
            <?php } ?>
        </a>
        <nav class="right-menu">

        <div class="menu-icons">
            <div class="menu-icons__item menu-icons__item--language">
                    <a href="">
                        <img src="<?php echo get_theme_file_uri().'/assets/public/images/sample-flag.svg'; ?>" alt="Chaiwallah logo" class="language-flag">
                    </a>
                </div>
                <div class="menu-icons__item menu-icons__item--phablet">
                    <a class="phablet-nav-link js">
                        <i class="icon icon-menu"></i>
                    </a>
                </div>
            </div>
            <ul>
                <?php 
                    $primary_menu_items = get_menu_items_by_location('primary');
                    $menu_items = filter_menu_items_by_parent($primary_menu_items, 0);
                    foreach($menu_items as $menu_item) {
                        $submenu_items = filter_menu_items_by_parent($primary_menu_items, $menu_item->ID);
                        $has_submenu = count($submenu_items) > 0;        
                        $menu_wing = get_field('menu_wing_location', $menu_item->ID);
                ?>
                <?php if($menu_wing == 'right') { ?>
                <li>
                    <a href="<?= $menu_item->url; ?>" target="<?= $menu_item->target; ?>"><?= $menu_item->title; ?></a>
                    <?php if ($has_submenu) { ?>
                    <i class="icon icon-angle-down"></i>
                    <div class="submenu">
                        <ul>
                            <?php
                                foreach ($submenu_items as $submenu_item) { 
                            ?>
                            <li>
                                <a href="<?php echo $submenu_item->url; ?>" target="<?= $submenu_item->target; ?>"><?php echo $submenu_item->title; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </li>
                <?php } ?>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>

<div class="header__lasktop  header__lasktop--sticky">
    <div class="container">
        <nav class="menu">
            <ul>
                <?php 
                    $primary_menu_items = get_menu_items_by_location('primary');
                    $menu_items = filter_menu_items_by_parent($primary_menu_items, 0);
                    foreach($menu_items as $menu_item) {
                        $submenu_items = filter_menu_items_by_parent($primary_menu_items, $menu_item->ID);
                        $has_submenu = count($submenu_items) > 0;        
                        $menu_wing = get_field('menu_wing_location', $menu_item->ID) ?: 'left';
                ?>
                <?php if($menu_wing == 'left') { ?>
                <li>
                    <a href="<?= $menu_item->url; ?>" target="<?= $menu_item->target; ?>"><?= $menu_item->title; ?></a>
                    <?php if ($has_submenu) { ?>
                    <i class="icon icon-angle-down"></i>
                    <div class="submenu">
                        <ul>
                            <?php
                                foreach ($submenu_items as $submenu_item) { 
                            ?>
                            <li>
                                <a href="<?php echo $submenu_item->url; ?>" target="<?= $submenu_item->target; ?>"><?php echo $submenu_item->title; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </li>
                <?php } ?>
                <?php } ?>
            </ul>
        </nav>
        <a href="<?= get_home_url(); ?>" class="header__brand">
            <img src="<?php echo get_theme_file_uri().'/assets/public/images/harem-logo.svg'; ?>" alt="Harem logo" class="mb-0">
        </a>
        <nav class="right-menu">

        <div class="menu-icons">
            <div class="menu-icons__item menu-icons__item--language">
                    <a href="">
                        <img src="<?php echo get_theme_file_uri().'/assets/public/images/sample-flag.svg'; ?>" alt="Chaiwallah logo" class="language-flag">
                    </a>
                </div>
                <div class="menu-icons__item menu-icons__item--phablet">
                    <a class="phablet-nav-link js">
                        <i class="icon icon-menu"></i>
                    </a>
                </div>
            </div>
            <ul>
                <?php 
                    $primary_menu_items = get_menu_items_by_location('primary');
                    $menu_items = filter_menu_items_by_parent($primary_menu_items, 0);
                    foreach($menu_items as $menu_item) {
                        $submenu_items = filter_menu_items_by_parent($primary_menu_items, $menu_item->ID);
                        $has_submenu = count($submenu_items) > 0;        
                        $menu_wing = get_field('menu_wing_location', $menu_item->ID);
                ?>
                <?php if($menu_wing == 'right') { ?>
                <li>
                    <a href="<?= $menu_item->url; ?>" target="<?= $menu_item->target; ?>"><?= $menu_item->title; ?></a>
                    <?php if ($has_submenu) { ?>
                    <i class="icon icon-angle-down"></i>
                    <div class="submenu">
                        <ul>
                            <?php
                                foreach ($submenu_items as $submenu_item) { 
                            ?>
                            <li>
                                <a href="<?php echo $submenu_item->url; ?>" target="<?= $submenu_item->target; ?>"><?php echo $submenu_item->title; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </li>
                <?php } ?>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>
