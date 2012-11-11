<header id="banner" role="banner">
  <div>
    <nav id="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
    <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
  </div>
</header>