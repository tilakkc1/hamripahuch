<nav class="navbar navbar-expand-lg navbar-light col p-0 ">
  <div id="mySidenav" class="sidenav topline-bg">
    <div class="bodyarea">
      <span class="closeThis allMenu" style="display: inline;">
        <i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 24px"></i>
      </span>
    </div>
    <?php
    wp_nav_menu([
     'menu'            => 'top',
     'theme_location'  => 'primary',
     'container'       => 'div ',
     'menu_id'         => false,
     'menu_class'      => 'nav flex-column scroll',
     'depth'           => 2,
     'fallback_cb'     => 'Bootstrap4Navwalker::fallback',
     'walker'          => new Bootstrap4Navwalker(array(
      'container'       => 'div',
      'container_class' => 'dropdown-menu menu mt-0',
      'container_id'    => 'ok-secondary-menu'
    )
   ),
   ]);
   ?>
 </div>
</nav>
