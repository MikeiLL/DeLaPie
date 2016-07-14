<?php
// Creating the widget
class immaterial_quote_widget extends WP_Widget {

	/**
	 *
	 */


	function __construct() {
		parent::__construct(
			// Base ID of your widget
			'immaterial_quote_widget',

			// Widget name will appear in UI
			__('De La Piedra Quotes', 'immaterial'),

			// Widget description
			array( 'description' => __( 'Display Quotes from the De La Piedra Office Wall', 'immaterial' ), )
		);



	}


	/**
	 * Creating widget front-end
	 * This is where the action happens
	 *
	 * @param unknown $args
	 * @param unknown $instance
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );



		// before and after widget arguments are defined by themes
		echo $args['before_widget'];



		if ( ! empty( $title ) )
			//echo $args['before_title'] . $title . $args['after_title'];





		// This is where you run the code and display the output
		echo $this->retrieveRandomQuote();//__( 'There are only two or three human stories and they go on repeating themselves as fiercely as if they had never happened before.  - Willa Cather', 'immaterial' );



		echo $args['after_widget'];



	}

	private function retrieveRandomQuote() {
	    $quotes = array(
	        //'Willa Cather' => 'There are only two or three human stories and they go on repeating themselves as fiercely as if they had never happened before.',
	        'John Steinbeck' => 'If the story is not about the hearer, he will not listen.',
	        'African Proverb' => 'Until the lion tells his own story, the tale of the hunt will always glorify the hunter.',
	        'Barbara Cook' => 'The place that seems most dangerous is exactly where safety lies.',
	        'John Henry Newman' => 'Cor ad cor loquitur. (Heart speaks unto heart)',
	    );
        $author = array_rand($quotes);
        $quote = $quotes[$author];
        $display = '<div class="office-quotes"><blockquote>'.$quote.'<cite>'.$author.'</cite></blockquote></div>';
	    return $display;
	}

	/**
	 * Widget Backend
	 *
	 * @param unknown $instance
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];



		}
		else {
			$title = __( 'New title', 'immaterial' );



		}
		// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' );



		?>"><?php _e( 'Title:' );



		?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' );



		?>" name="<?php echo $this->get_field_name( 'title' );



		?>" type="text" value="<?php echo esc_attr( $title );



		?>" />
</p>
<?php
	}


	/**
	 * Updating widget replacing old instances with new
	 *
	 * @param unknown $new_instance
	 * @param unknown $old_instance
	 * @return unknown
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();



		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';



		return $instance;



	}


} // Class immaterial_quote_widget ends here


/**
 * Register and load the widget
 */

add_action( 'widgets_init', function(){
	register_widget( 'immaterial_quote_widget' );
});



?>
