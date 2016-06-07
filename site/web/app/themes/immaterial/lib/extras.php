<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more($source="general") {
  if ($source == "mdl-card") {
    return '&hellip; <div class="mdl-card__actions mdl-card--border">' .
          '<div class="mdl-layout-spacer"></div>' .
            '<a href="' . get_permalink() . '" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Read More</a>' .
          '</div>';
  } else {
  return '&hellip; <a href="' . get_permalink() . '" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">' . __('Read More', 'immaterial') . '</a>';
  }
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/* As recommended in Roots Discourse, this function is called
 * within div wrap so we can eliminate the container and have
 * full width rows and divs.
*/
function container_class() {
  if ( is_front_page() || 'movies' == get_post_type() ) {
    return 'mdl-grid--no-spacing';
  } else {
    return;
  }
}
//*

// BOF Featured Article
function register_post_assets(){
    add_meta_box('featured-post', __('Featured Post'), __NAMESPACE__ . '\\add_featured_meta_box', 'post', 'advanced', 'high');
}
add_action('admin_init', __NAMESPACE__ . '\\register_post_assets', 1);

function add_featured_meta_box($post){
	$featured = get_post_meta($post->ID, '_featured-post', true);
	echo "<label for='_featured-post'>".__('Feature this post?', 'sage')."</label>";
	echo " <input type='checkbox' name='featured-post' id='featured-post' value='1' ".checked(1, $featured)." />";
	}

function save_featured_meta($post_id){
   if (isset($_REQUEST['featured-post']))
        update_post_meta(esc_attr($post_id), '_featured-post', esc_attr($_REQUEST['featured-post']));
        }
add_action('save_post', __NAMESPACE__ . '\\save_featured_meta');
// EOF Featured Article

/*
* Replace spaces in url string with separator supplied as argument
*/
function formatUrl($str, $sep='-')
	{
		$res = strtolower($str);
		$res = preg_replace('/[^[:alnum:]]/', ' ', $res);
		$res = preg_replace('/[[:space:]]+/', $sep, $res);
		return trim($res, $sep);
	}
