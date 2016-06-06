<?php
use Roots\Sage\Extras;
?>
<?php get_template_part('templates/faq', 'header'); ?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'immaterial'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php
$args = array( 'post_type' => 'faq', 'paged' => $paged );
$hwr_loop = new WP_Query( $args );
?>

	<?php while ($hwr_loop->have_posts()) : $hwr_loop->the_post(); ?>
	  <a name="<?php echo Extras\formatUrl(get_the_title(), '-'); ?>"></a>
		<?php get_template_part('templates/content', get_post_type() != 'faq' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

<?php the_posts_navigation(); ?>