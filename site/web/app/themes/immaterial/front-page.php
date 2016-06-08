<?php

use Roots\Sage\Assets;

/**
 * Template Name: Home Template
 */
?>


<?php // while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

<div class="content-grid mdl-grid mdl-grid--no-spacing">
  <div id="bio_image" class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-grid hero">
      <div class="textholder">
        <div class="picture_text">
          <span class="normal">Please, call me Jack.</span>
        </div>
      </div> <!-- /textholder -->
    </div>
  </div>

  <div id="biography" class="content-grid mdl-grid mdl-grid--no-spacing mdl-color--turquoise-500 mdl-color-text--black-50 front-page__cover">

      <div>
        <h2>Nursing Home Abuse. <br />It's Not Just <em>What</em> I Do. <br />It's <em>All</em> I Do.</h2>
        <p>After a decade in civil law, I’m able to focus on a field that is meaningful and fulfilling. I have become very skilled at representing people who have suffered injury or death in nursing homes and assisted living facilities.</p>
        <p>Identifying and litigating cases of nursing home abuse allows me to work intimately with individuals and families to protect our elders. And life is just too short not to make every day count.</p>
        <p>Some people see law as a tedious, drudging inevitability. For me, it’s an art. Each case is like a block of rough marble. Together we look at it from all possible angles and carve out its innate beauty: a true story that speaks to the heart and makes sense in relation to the laws of our society. And <em>that</em> is persuasive.</p>
        <h3>Awards & Distinctions</h3>
        <ul>
          <li>  AV Preeminent Attorney by Martindale-Hubbell
            <ul>
              <li>Nursing Home Abuse</li>
              <li>Personal Injury</li>
            </ul>
          </li>
          <li>Florida Super Lawyer since 2013</li>
          <li><em>Superb</em> Rated Attorney by Avvo</li>
        </ul>
      </div>


  </div>


  <div id="situations" class="content-grid mdl-grid front-page__cover">

    <h2>Typical Nursing Home Injuries</h2>
    <?php get_template_part('templates/front-page/situations'); ?>

  </div>

  	<div id="articles" class="content-grid mdl-grid mdl-grid--no-spacing mdl-color--turquoise-500 front-page__cover mdl-color-text--yellow-50 front-page__cover">
      <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone front-page__card-holder">
        <?php get_template_part('templates/front-page/featured-articles'); ?>
      </div>
      <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone front-page__card-holder">
        <?php get_template_part('templates/front-page/recent-articles'); ?>
      </div>

  </div>


<?php // endwhile; ?>
