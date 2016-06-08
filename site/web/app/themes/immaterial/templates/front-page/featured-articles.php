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
			'posts_per_page' => 3,
			'meta_key' => '_featured-post',
			'meta_value' => 1
			);
			$featured = new \WP_Query($args);

			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
			<div class="mdl-card mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-shadow--1dp">
			<?php if (has_post_thumbnail()) : ?>
        <figure class="mdl-card__media">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large', array( 'class'	=> "post-img-responsive")); ?></a>
        </figure>

				<?php endif; ?>

        <div class="mdl-card__title">
          <h1 class="mdl-card__title-text"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
        </div>
        <div class="mdl-card__supporting-text">
				<?php echo the_excerpt();?>
        </div>

      </div>

			<?php endwhile; else:
			endif;
			?>

