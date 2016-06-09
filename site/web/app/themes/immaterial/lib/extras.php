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

// Start BNS Dynamic Copyright
if ( ! function_exists( 'bns_dynamic_copyright' ) ) {
  function bns_dynamic_copyright( $args = '' ) {
      $initialize_values = array( 'start' => '', 'copy_years' => '', 'url' => '', 'end' => '' );
      $args = wp_parse_args( $args, $initialize_values );

      /* Initialize the output variable to empty */
      $output = '';

      /* Start common copyright notice */
      empty( $args['start'] ) ? $output .= sprintf( __('Copyright') ) : $output .= $args['start'];

      /* Calculate Copyright Years; and, prefix with Copyright Symbol */
      if ( empty( $args['copy_years'] ) ) {
        /* Get all posts */
        $all_posts = get_posts( 'post_status=publish&order=ASC' );
        /* Get first post */
        $first_post = $all_posts[0];
        /* Get date of first post */
        $first_date = $first_post->post_date_gmt;

        /* First post year versus current year */
        $first_year = substr( $first_date, 0, 4 );
        if ( $first_year == '' ) {
          $first_year = date( 'Y' );
        }

      /* Add to output string */
        if ( $first_year == date( 'Y' ) ) {
        /* Only use current year if no posts in previous years */
          $output .= ' &copy; ' . date( 'Y' );
        } else {
          $output .= ' &copy; ' . $first_year . "-" . date( 'Y' );
        }
      } else {
        $output .= ' &copy; ' . $args['copy_years'];
      }

      /* Create URL to link back to home of website */
      empty( $args['url'] ) ? $output .= ' <a href="' . home_url( '/' ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name', 'display' ) .'</a>  ' : $output .= ' ' . $args['url'];

      /* End common copyright notice */
      empty( $args['end'] ) ? $output .= ' ' . sprintf( __('All rights reserved.') ) : $output .= ' ' . $args['end'];

      /* Construct and sprintf the copyright notice */
      $output = sprintf( __('<span class="copyright" id="bns-dynamic-copyright"> %1$s </span><!-- #bns-dynamic-copyright -->'), $output );
      $output = apply_filters( 'bns_dynamic_copyright', $output, $args );

      return $output;
  }
}
// End BNS Dynamic Copyright
