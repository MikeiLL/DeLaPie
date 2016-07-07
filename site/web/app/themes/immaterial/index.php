<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'immaterial'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php
$args = array(
            'post_type' => 'post',
            'paged' => $paged,
            'meta_query' => array(
                  array(
                   'key' => '_featured-post',
                   'compare' => 'NOT EXISTS' // this should work...
                  ),
              )
			      );
$hwr_loop = new WP_Query( $args );
?>

	<?php while ($hwr_loop->have_posts()) : $hwr_loop->the_post(); ?>
		<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

<?php the_posts_navigation(); ?>
