			<h2 class="text-center">Recent Articles</h2>

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
				<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
				<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb', array( 'class'	=> "img-responsive")); ?></a>
				<?php endif; ?>
				<?php echo the_excerpt();?>

			<?php endwhile; else:
			endif;
			?>

