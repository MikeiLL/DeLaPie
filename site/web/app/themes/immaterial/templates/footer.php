<?php

use Roots\Sage\Assets;
use Roots\Sage\Extras;

?>
<?php if ( is_active_sidebar( 'sidebar-mega-footer' ) ) { ?>
<footer class="mdl-mega-footer" role="contentinfo">
  <div class="mdl-mega-footer__middle-section">
    <?php dynamic_sidebar('sidebar-mega-footer'); ?>
  </div>

</footer>
<?php } ?>
<footer class="mdl-mega-footer">

  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section">
       <div vocab="http://schema.org/" typeof="Person" class="mdl-mini-footer__address">
        <span property="name">Jack De La Piedra</span><br />
        <span property="jobTitle">Civil Justice Attorney</span>
        <div property="address" typeof="PostalAddress">
          <span property="streetAddress">
            913 Gulf Breeze Parkway, Suite 25
          </span><br />
          <span property="addressLocality">Gulf Breeze</span>,
          <span property="addressRegion">FL</span>
          <span property="postalCode">32561</span>
        </div>
        <svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
        </svg>
        <span property="telephone">(850) 932-8560</span>
        <svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
        </svg>
        <span property="fax">(850) 932-8129</span><br />
        <a href="mailto:jack@delapiedralawfirm.com" property="email">jack@delapiedralawfirm.com</a>
      </div>
    </div>


    <div class="mdl-mega-footer__drop-down-section">
      <div class="mdl-mega-footer__heading">Details</div>
      <div class="mdl-logo"></div>
     <!-- <ul class="mdl-mini-footer__link-list"> -->
      <?php

    if ( has_nav_menu( 'footer_links' ) ) :
      $cleanermenu = wp_nav_menu(array(
      'theme_location' => 'footer_links',
      'container' => false,
      'items_wrap' => '<nav class="mdl-mega-footer__link-list">%3$s</nav>',
      'echo' => false,
      'depth' => 2,
      ) );

    echo $cleanermenu;

  endif;
  ?>
    </ul>

    </div>

    <div class="mdl-mega-footer__drop-down-section">
    </div>
    <div class="mdl-mega-footer__drop-down-section">
      <img src="<?php echo Assets\asset_path('images/martindale_badge.jpg') ?>" />
      <img src="<?php echo Assets\asset_path('images/super-lawyers_badge.jpg') ?>" />
      <img src="<?php echo Assets\asset_path('images/avvo_badge.jpg') ?>" />
    </div>


  </div>

  <div class="mdl-mega-footer__bottom-section">
    <div class="mdl-logo"></div>
     <!-- <ul class="mdl-mini-footer__link-list"> -->
      <?php

    if ( has_nav_menu( 'footer_links' ) ) :
      $cleanermenu = wp_nav_menu(array(
      'theme_location' => 'footer_links',
      'container' => false,
      'items_wrap' => '<nav class="mdl-mini-footer__link-list">%3$s</nav>',
      'echo' => false,
      'depth' => 2,
      ) );

    echo $cleanermenu;

  endif;
  ?>
    </ul>
  </div>

</footer>



<?php if ( is_front_page() || is_home() ): ?>
<script>
// Fill viewport
var vWidth = window.innerWidth;
    vHeight = window.innerHeight;
    cover = document.getElementsByClassName('front-page__cover')[0];

//cover.setAttribute("style", "height: " + vHeight + 'px');

// Close MDL drawer on click so works with anchor links
function close() {
  var d = document.querySelector('.mdl-layout');
  d.MaterialLayout.toggleDrawer();
}

document.querySelector('.mdl-layout__drawer').addEventListener('click', close);
</script>
<?php endif; ?>
