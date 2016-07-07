  <article <?php post_class(); ?>>
       <?php $item_name = str_replace(array(' ', '?'), array('-', ''), get_the_title()); ?>
      <ul class="questions">

         <li class="list__item">
        <button class="btn active list-def" data-gk-close-span-glyph="active" data-gk-open-span-glyph="closed" data-gk-open-class="<?php echo $item_name ?>" data-gk-area-state="closed" title="Click to Open"><?= the_title(); ?></button>

            <div class="response-definition <?php echo $item_name ?>">
              <?php the_content(); ?>
            </div>
          </li>
      	</ul>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'immaterial'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>


