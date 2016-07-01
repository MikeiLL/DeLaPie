<?php

use Roots\Sage\Assets;

/**
 * Template Name: Home Template
 */
?>

<?php // while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

<div class="content-grid mdl-grid mdl-grid--no-spacing mdl-color--grey-500">
  <div id="bio_image" class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-color--grey-300">
    <div class="mdl-grid hero">
      <div class="textholder">
        <div class="picture_text">
          <span class="normal">Please, call me Jack.</span>
        </div>
      </div> <!-- /textholder -->
    </div>
  </div>

  <div id="biography" class="content-grid mdl-grid mdl-grid--no-spacing mdl-color-text--alabaster-400 front-page__cover">

      <div>
        <p>After a <em>decade</em> in civil law, I’m able to focus on a field that is meaningful and fulfilling. I have become experienced at representing people who have suffered injury or death in nursing homes and assisted living facilities.
        Identifying and litigating cases of nursing home abuse allows me to work intimately with individuals and families to <em>protect our elders.</em> And life is just too short not to make every day count.
        Some people see law as a tedious, drudging inevitability. For me, <em>it’s an art.</em> Each case is like a block of rough marble. Together we look at it from all possible angles and carve out its innate beauty: a true story that speaks to the heart and makes sense in relation to the laws of our society. And <em>that</em> is persuasive.</p>
      </div>


  </div>

  <div id="situations" class="content-grid mdl-grid mdl-color--grey-500 mdl-color-text--alabaster-50 front-page__cover">

    <h2>Nursing Home Abuse and Neglect Cases</h2>
    <h3>Not just what I do, <br class="mdl-cell--hide-desktop" />it's <em>all</em> I do.</h3>
    <?php get_template_part('templates/front-page/situations'); ?>

  </div><!-- ./#situations -->

  	<div id="articles" class="content-grid mdl-grid mdl-grid--no-spacing mdl-color-text--alabaster-50 front-page__cover">
      <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell--4-col-phone front-page__card-holder">
        <?php get_template_part('templates/front-page/featured-articles'); ?>
      </div>
    </div>

  </div><!-- ./content-grid -->


<?php // endwhile; ?>
