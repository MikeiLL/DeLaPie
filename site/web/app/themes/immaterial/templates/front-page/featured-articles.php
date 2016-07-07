<?php

namespace Roots\Sage\featured_articles;

/**
 * Clean up the_excerpt()
 */
function excerpt_more_card() {
    return '&hellip; <div class="mdl-card__actions mdl-card--border">' .
          '<div class="mdl-layout-spacer"></div>' .
            '<a href="' . get_permalink() . '" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Read More</a>' .
          '</div>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more_card');

?>

				<?php

						$args = array(
			'posts_per_page' => 1,
			'meta_key' => '_featured-post',
			'meta_value' => 1
			);
			$featured = new \WP_Query($args);

			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
			<?php if (has_post_thumbnail()) : ?>
        <!-- <figure class="mdl-card__media">
            <?php the_post_thumbnail('medium_large', array( 'class'	=> "post-img-responsive")); ?>
        </figure> -->

				<?php endif; ?>

          <h2>3 Questions to Ask in choosing a facility<?php //the_title(); ?></h2>

				<?php echo the_content();?>


			<?php endwhile; else:
			endif;
			?>

