<header class="u-clearfix u-header u-header" id="sec-d5ff">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h3 class="u-custom-font u-headline u-text u-text-1">
      <a href="/"><span class="u-icon"></span>&nbsp;ClarityShare |&nbsp; ​AI Strategy 
      </a>
    </h3>
    <?php
            ob_start();
            ?><nav class="u-align-left u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XL">
      <div class="menu-collapse">
        <a class="u-button-style u-nav-link u-text-black" href="#" style="padding: 14px 66px; font-size: calc(1em + 28px);">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="undefined"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        </a>
      </div>
      <div class="u-nav-container">
        {menu}
      </div>
      <div class="u-nav-container-collapse">
        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            {responsive_menu}
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav><?php
            $menu_template = ob_get_clean();
            $menuPath = '/template-parts/menu/primary-navigation-1/';
            $processorPath = get_theme_file_path('/template-parts/menu/popups-render.php');
            if (file_exists($processorPath)) {
                include $processorPath;
            }
            echo Theme_NavMenu::getMenuHtml(array(
                'container_class' => 'u-align-left u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1',
                'menu' => array(
                    'is_mega_menu' => false,
                    'menu_class' => 'u-nav u-spacing-25 u-unstyled',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => 'padding: 8px 0px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-4bdf-5',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'is_mega_menu' => false,
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => '',
                    'submenu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-1',
                'template' => $menu_template,
                'mega_menu' => isset($megaMenu) ? $megaMenu : '{}',
            )); ?>
  </div>
</header>