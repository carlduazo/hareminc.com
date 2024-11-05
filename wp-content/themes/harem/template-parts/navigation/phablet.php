<div class="header__phablet">
    <div class="phablet-search">
        <div class="search-form">
            <?php echo \SearchWP\Forms\Frontend::render( [ 'id' => 1 ] ); ?>
        </div>
    </div>
    <div class="menu">
        <ul class="p-0">
            <?php
                $primary_menu_items = get_menu_items_by_location('primary');
                $menu_items = filter_menu_items_by_parent($primary_menu_items, 0);
                foreach($menu_items as $menu_item) {
                    $submenu_items = filter_menu_items_by_parent($primary_menu_items, $menu_item->ID);
                    $has_submenu = count($submenu_items) > 0;    
            ?>
            <li>
                <a href="<?= $menu_item->url; ?>" target="<?= $menu_item->target; ?>"><?= $menu_item->title; ?></a>
                <?php if ($has_submenu) { ?>
                <span class="menu-expand js">
                    <i class="icon icon-plus"></i>
                </span>
                <div class="submenu js">
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
            <?php 
                } 
            ?>
        </ul>
    </div>
</div>