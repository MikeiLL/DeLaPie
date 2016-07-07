<?php
/**
 * Template Name: Biography Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <div class="data-listing">
<h2>Admissions</h2>
<ul><li>Florida</li>
<li>Georgia</li>
<li>US Court of Appeals, Eleventh Circuit</li>
<li>US District Court, Northern District of Florida</li>
<li>US District Court, Middle District of Florida</li>
<li>US District Court, Southern District of Florida</li>
</ul>

<h2>Education</h2>
<ul><li>Gerry Spence Trial Lawyers College, Graduate, 2015</li>
<li>Stetson University College of Law, J.D., 2001</li>
<li>Drury University, B.A., 1999</li>
</ul>

<h2>Associations</h2>
<ul><li>American Mensa</li>
<li>Disabled American Veterans</li>
<li>Humane Society of the US</li>
<li>US Chess Federation</li>
<li>American Bar Association</li>
<li>Florida Justice Association</li>
<li>Escambia Santa Rosa Bar Association</li>

</ul>

<h2>Distinctions</h2>
<ul><li>AV Preeminent Rated, Martindale Hubbell</li>
<li>Florida Super Lawyers, Since 2013</li>
<li>Superb Rated, Avvo</li>
</ul>
</div>

<?php endwhile; ?>
