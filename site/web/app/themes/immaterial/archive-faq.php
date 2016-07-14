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
/*$args= query_posts(
    array(  'post_type' => 'faq',
            'order'     => 'ASC',
            'meta_key' => 'sequence_meta_box',
            'orderby'   => 'meta_value', //or 'meta_value_num'
            'meta_query' => array(
                                array('key' => 'order_in_archive',
                                      'value' => 'some_value'
                                )
                            ),
	          'posts_per_page' => -1
                )
            );*/
$hwr_loop = new WP_Query( $args );
?>
  <ul class="questions">
	<?php while ($hwr_loop->have_posts()) : $hwr_loop->the_post(); ?>
	  <a name="<?php echo Extras\formatUrl(get_the_title(), '-'); ?>"></a>
		<?php get_template_part('templates/content-faq', get_post_type() != 'faq' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
	</ul>

<?php the_posts_navigation(); ?>
