			<?php

						$args = array(
			'posts_per_page' => 3,
			'meta_query' => array(
       'relation' => 'OR',
        array(
         'key' => '_featured-post',
         'compare' => 'NOT EXISTS', // works!
         'value' => '' // This is ignored, but is necessary...
              )
          ),
			);
			$not_featured = new WP_Query($args);

			if ($not_featured->have_posts()): while($not_featured->have_posts()): $not_featured->the_post(); ?>
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

