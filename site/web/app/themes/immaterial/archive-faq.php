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
//$args = array( 'post_type' => 'faq', 'paged' => $paged );
/*$args= array(  'post_type' => 'faq',
            'order'     => 'ASC',
            'meta_key' => 'sequence_meta_box',
            'orderby'   => 'meta_value', //or 'meta_value_num'
            'meta_query' => array(
                                array('key' => 'order_in_archive',
                                      'value' => 'some_value'
                                )
                            ),
	          'posts_per_page' => -1
            );*/
$args = array(
'post_type' => 'faq',

 'meta_query' => array(
       'relation' => 'OR',
        array( //check to see if date has been filled out
                'key' => 'sequence_meta_box',
                'compare' => '>=',
                'value' => 0
            ),
          array( //if no sequence has been added show these posts too
                // TODO Make this work so displays even if sequence not set.
                'key' => 'sequence_meta_box',
                'compare' => 'NOT EXISTS',
                'value' => date('Y-m-d')
            )
        ),
'meta_key' => 'sequence_meta_box',
'orderby' => 'meta_value title',
'order' => 'ASC',
'posts_per_page' => -1,
);
$hwr_loop = new WP_Query( $args );
//$hwr_loop = new WP_Meta_Query( $meta_query_args );


?>
  <ul class="questions">
	<?php while ($hwr_loop->have_posts()) : $hwr_loop->the_post(); ?>
	  <a name="<?php echo Extras\formatUrl(get_the_title(), '-'); ?>"></a>
		<?php get_template_part('templates/content-faq', get_post_type() != 'faq' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
	</ul>

<?php the_posts_navigation(); ?>
