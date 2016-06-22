<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;
use Roots\Sage\Assets;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
  <?php echo file_get_contents(Assets\asset_path('images/sprites/sprite-defs.svg')); ?>

    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'immaterial'); ?>
      </div>
    <![endif]-->
    <div class="mdl-layout__container">
      <div class="mdl-layout mdl-layout--no-desktop-drawer-button mdl-js-layout mdl-layout--fixed-header">
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
        <div class="mdl-layout__content" role="document">
          <div class="mdl-grid <?= Extras\container_class(); ?>">
            <?php
            if (Setup\display_sidebar()) :
              $col = 'mdl-cell--8-col';
            else :
              $col = 'mdl-cell--12-col';
            endif;
            ?>
            <main class="mdl-cell <?php echo $col; ?>" role="main">
              <?php include Wrapper\template_path(); ?>
            </main><!-- main -->
            <?php if (Setup\display_sidebar()) : ?>
              <aside class="mdl-cell mdl-cell--4-col" role="complementary">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- sidebar -->
            <?php endif; ?>
          </div><!-- /.page-content.mdl-grid -->
          <?php
            do_action('get_footer');
            get_template_part('templates/footer');
            wp_footer();
          ?>
        </div><!-- /.mdl-layout__content -->
      </div><!-- /.mdl-layout -->
    </div>
    <script type="text/javascript">
    //Replace MDL icon with our sprite
    function mdl_drawer_btn() {

      // Only do this on phones
      var mdl_drawer_button = document.querySelector('.mdl-layout__drawer-button');
        // Exit if browser does not support SVG
        var supports = !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
        if ( !supports ) return;

        if (mdl_drawer_button != null) {
            mdl_drawer_button.innerHTML = '<svg viewBox="0 0 100 100" class="icon nav-icon"><use xlink:href="#nav-icon"></use></svg>';
          } else {
            setTimeout(mdl_drawer_btn, 100);
          }
      }

      //var vWidth = window.innerWidth;
      //if (vWidth < 960)
        setTimeout(mdl_drawer_btn, 100);

    // ./Replace MDL icon with our sprite

    </script>

    <?php if ( is_front_page() || is_home() ): ?>

    <script type="text/javascript">

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
  </body>
</html>
