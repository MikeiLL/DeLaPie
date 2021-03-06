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
      <div class="mdl-mega-footer__heading">Call Me. Really.</div>
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
        <svg class="icon" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
        </svg><span class="icon-fallback-text">Phone: </span>
        <span property="telephone">(850) 932-8560</span>
        <span class="nobr"><svg class="icon" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
        </svg><span class="icon-fallback-text">Fax: </span>
        <span>(850) 932-8129</span></span><br />
        <span property="email"><a href="<?php echo home_url( '/contact' ); ?>">info@delapiedralawfirm.com</a></span>
      </div>
    </div>


    <div class="mdl-mega-footer__drop-down-section">
      <div class="mdl-mega-footer__heading">Pages</div>
      <div class="mdl-logo"></div>
     <!-- <ul class="mdl-mini-footer__link-list"> -->
      <?php

    if ( has_nav_menu( 'footer_links_one' ) ) :
      echo wp_nav_menu(array(
      'theme_location' => 'footer_links_one',
      'container' => false,
      'items_wrap' => '<nav class="mdl-mega-footer__link-list">%3$s</nav>',
      'echo' => false,
      'depth' => 1,
      ) );

      //echo $cleanermenu;

  endif;
  ?>

    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <div class="mdl-mega-footer__heading">Boring But Necessary Details</div>
      <div class="mdl-logo"></div>
     <!-- <ul class="mdl-mini-footer__link-list"> -->
      <?php

    if ( has_nav_menu( 'footer_links_two' ) ) :
      echo wp_nav_menu(array(
      'theme_location' => 'footer_links_two',
      'container' => false,
      'items_wrap' => '<nav class="mdl-mega-footer__link-list">%3$s</nav>',
      'echo' => false,
      'depth' => 1,
      ) );

  endif;
  ?>

    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <div class="mdl-mega-footer__heading">Distinctions</div>
      <img src="<?=get_stylesheet_directory_uri();?>/dist/images/martindale_badge.jpg" title="Martindale Hubbell Badge" /><br />
      <img src="<?=get_stylesheet_directory_uri();?>/dist/images/super-lawyers_badge.jpg" title="Super Lawyers Badge" />
      <img src="<?=get_stylesheet_directory_uri();?>/dist/images/avvo.jpg" title="Avvo Badge" />
    </div>
  </div>


    <?php echo Extras\bns_dynamic_copyright() ?>
  </div>

</footer>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Attorney",
  "name": "De La Piedra Law",
  "description": "De La Piedra Law Firm represents subjects of abuse or neglect in nursing homes and assisted living facilities. Gulf Breeze, Pensacola, Florida.",
  "url": "http://delapiedralawfirm.com",
  "image": "http://delapiedralawfirm.com/app/uploads/2016/07/callmejack.jpg",
  "telephone": "850 932-8560",
  "email": "info@delapiedralawfirm.com",
  "hasMap": "https://www.google.com/maps/place/913+Gulf+Breeze+Pkwy+%2325,+Gulf+Breeze,+FL+32561/@30.3569864,-87.1641402,17z/data=!3m1!4b1!4m5!3m4!1s0x8890c65fdb929adb:0x738cbb5ea80ac4ce!8m2!3d30.3569864!4d-87.1619515",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Gulf Breeze",
    "addressRegion": "FL",
    "postalCode": "32561",
    "streetAddress": "913 Gulf Breeze Parkway, Suite 25"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "30° 23' 24.2088\"",
    "longitude": "-87° 4' 11.1432\""
  },
  "sameAs": [
    "https://www.facebook.com/DeLaPiedraLawFirm/",
    "https://plus.google.com/105549618794304040186"
  ],
  "openingHours": "Mo,Tu,We,Th,Fr, 09:00-17:00"
}
</script>
