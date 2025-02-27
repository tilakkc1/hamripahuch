<div id="sticky-top" class="main_menu_section container-fluid" style="background: var(--tlt-primary)">
  <div class="container sm-no-padding">
    <div class="row my-nav">
      <div class="col-md-12 col-sm-12 pl-md-0">
        <nav class="navbar navbar-expand-lg navbar-light col p-0 ">
          <a class="navbar-brand tilak" href="<?php echo esc_url(home_url('')); ?>">
            <i class="fa fa-home text-line brand-home-icon" aria-hidden="true"
              style=" font-size: 25px; padding: 7px 0;"></i>
          </a>
          <?php
          wp_nav_menu([
            'menu' => 'top',
            'theme_location' => 'primary',
            'container' => 'div',
            'container_id' => 'Main-Menu',
            'container_class' => 'collapse navbar-collapse',
            'menu_id' => false,
            'menu_class' => 'navbar-nav mr-auto main-nav my-menu mt-lg-0',
            'depth' => 2,
            'fallback_cb' => 'Bootstrap4Navwalker::fallback',
            'walker' => new Bootstrap4Navwalker(
              array(
                'container' => 'div',
                'container_class' => 'dropdown-menu sm-menu mt-0',
              )
            ),
          ]);
          ?>
          <ul class="right-items mb-0">
            <span class="lukeko_menu_icon" style="font-size:25px;cursor:pointer; margin-right: 10px">
              <i class="fa fa-bars text-line mt-2"></i>
            </span>
            <span class="openBtn"
              style="font-size:20px;cursor:pointer; margin-right: 10px; background: var(--tlt-secondary); padding: 16px 20px 10px 20px">
              <i class="fa fa-search text-line"></i>
            </span>
          </ul>
        </nav>
      </div>
    </div>
    <div class="nepali-date">
      <?php TodaysNepaliCurrentDate(); ?>
    </div>
  </div>
</div>
<div class="search-block">
  <span class="closebtn" title="Close Overlay"><i class="fa fa-times"></i></span>
  <div class="search-block-content">
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>