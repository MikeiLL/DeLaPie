       <?php $item_name = str_replace(array(' ', '?'), array('-', ''), get_the_title()); ?>
         <li class="list__item text-list">
        <button class="btn active list-def" data-gk-close-span-glyph="active" data-gk-open-span-glyph="closed" data-gk-open-class="<?php echo $item_name ?>" data-gk-area-state="closed" title="Click to Open"><?= the_title(); ?></button>

            <div class="response-definition <?php echo $item_name ?>">
              <?php the_content(); ?>
            </div>
          </li>


