<?php 

// register social widget
function register_social_widget_sidebar() {
    register_widget( 'social_widget_sidebar' );
}
add_action( 'widgets_init', 'register_social_widget_sidebar' );


/**
 * Adds social_widget_sidebar widget.
 */
class social_widget_sidebar extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  function __construct() {
    parent::__construct(
      'social_widget_sidebar', // Base ID
      __( 'Social Icons Sidebar', 'lightworker' ), // Name
      array( 'description' => __( 'Social Icons for the sidebar', 'lightworker' ), ) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    if ( ! empty( $instance['title'] ) ) {
      echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
    }
 
    $facebook = esc_url( $instance['facebook'] );
    $twitter = esc_url( $instance['twitter'] );
    $pinterest = esc_url( $instance['pinterest'] );
    $instagram = esc_url( $instance['instagram'] );
    $googleplus = esc_url( $instance['googleplus'] );
    $yelp = esc_url( $instance['yelp'] );
    $youtube = esc_url( $instance['youtube'] );
    $linkedin = esc_url( $instance['linkedin'] );
    $behance = esc_url( $instance['behance'] );
    $dribbble = esc_url( $instance['dribbble'] );
    $github = esc_url( $instance['github'] );
    $skype = esc_url( $instance['skype'] );
    $vimeo = esc_url( $instance['vimeo'] );
    $vine = esc_url( $instance['vine'] );
    $tumblr = esc_url( $instance['tumblr'] );

    echo sprintf( '<div class="social-sidebar-widget">');

    if ( ! empty( $instance['facebook'] ) ) {
      echo sprintf( '<a href="' . $facebook . '"><i class="fa fa-facebook-official"></i></a>');
    }

    if ( ! empty( $instance['twitter'] ) ) {
      echo sprintf( '<a href="' . $twitter . '"><i class="fa fa-twitter"></i></a>');
    }

    if ( ! empty( $instance['pinterest'] ) ) {
      echo sprintf( '<a href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a>');
    }

    if ( ! empty( $instance['instagram'] ) ) {
      echo sprintf( '<a href="' . $instagram . '"><i class="fa fa-instagram"></i></a>');
    }

    if ( ! empty( $instance['googleplus'] ) ) {
      echo sprintf( '<a href="' . $googleplus . '"><i class="fa fa-google-plus-official"></i></a>');
    }

    if ( ! empty( $instance['yelp'] ) ) {
      echo sprintf( '<a href="' . $yelp . '"><i class="fa fa-yelp"></i></a>');
    }

    if ( ! empty( $instance['youtube'] ) ) {
      echo sprintf( '<a href="' . $youtube . '"><i class="fa fa-youtube"></i></a>');
    }

    if ( ! empty( $instance['linkedin'] ) ) {
      echo sprintf( '<a href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>');
    }

    if ( ! empty( $instance['behance'] ) ) {
      echo sprintf( '<a href="' . $behance . '"><i class="fa fa-behance"></i></a>');
    }

    if ( ! empty( $instance['dribbble'] ) ) {
      echo sprintf( '<a href="' . $dribbble . '"><i class="fa fa-dribbble"></i></a>');
    }

    if ( ! empty( $instance['github'] ) ) {
      echo sprintf( '<a href="' . $github . '"><i class="fa fa-github"></i></a>');
    }

    if ( ! empty( $instance['skype'] ) ) {
      echo sprintf( '<a href="' . $skype . '"><i class="fa fa-skype"></i></a>');
    }

    if ( ! empty( $instance['vimeo'] ) ) {
      echo sprintf( '<a href="' . $vimeo . '"><i class="fa fa-vimeo"></i></a>');
    }

    if ( ! empty( $instance['vine'] ) ) {
      echo sprintf( '<a href="' . $vine . '"><i class="fa fa-vine"></i></a>');
    }

    if ( ! empty( $instance['tumblr'] ) ) {
      echo sprintf( '<a href="' . $tumblr . '"><i class="fa fa-tumblr"></i></a>');
    }

    echo sprintf( '</div>');

    echo $args['after_widget'];
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Follow Us', 'lightworker' );
    $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : __( '', 'lightworker' );
    $twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : __( '', 'lightworker' );
    $pinterest = ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : __( '', 'lightworker' );
    $instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : __( '', 'lightworker' );
    $googleplus = ! empty( $instance['googleplus'] ) ? $instance['googleplus'] : __( '', 'lightworker' );
    $yelp = ! empty( $instance['yelp'] ) ? $instance['yelp'] : __( '', 'lightworker' );
    $youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : __( '', 'lightworker' );
    $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : __( '', 'lightworker' );
    $behance = ! empty( $instance['behance'] ) ? $instance['behance'] : __( '', 'lightworker' );
    $dribbble = ! empty( $instance['dribbble'] ) ? $instance['dribbble'] : __( '', 'lightworker' );
    $github = ! empty( $instance['github'] ) ? $instance['github'] : __( '', 'lightworker' );
    $skype = ! empty( $instance['skype'] ) ? $instance['skype'] : __( '', 'lightworker' );
    $vimeo = ! empty( $instance['vimeo'] ) ? $instance['vimeo'] : __( '', 'lightworker' );
    $vine = ! empty( $instance['vine'] ) ? $instance['vine'] : __( '', 'lightworker' );
    $tumblr = ! empty( $instance['tumblr'] ) ? $instance['tumblr'] : __( '', 'lightworker' );
    ?>

    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Follow Us', 'lightworker' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
    value="<?php echo esc_attr( $title ); ?>">
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('facebook_field'); ?>"><?php _e('Enter the URL for your Facebook page', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('facebook_field'); ?>" name="<?php echo $this->get_field_name('facebook_field'); ?>" type="text" 
    value="<?php echo esc_attr( $facebook ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('twitter_field'); ?>"><?php _e('Enter the URL for your Twitter profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('twitter_field'); ?>" name="<?php echo $this->get_field_name('twitter_field'); ?>" type="text" 
    value="<?php echo esc_attr( $twitter ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('pinterest_field'); ?>"><?php _e('Enter the URL for your Pinterest page', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('pinterest_field'); ?>" name="<?php echo $this->get_field_name('pinterest_field'); ?>" type="text" 
    value="<?php echo esc_attr( $pinterest ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('instagram_field'); ?>"><?php _e('Enter the URL for your Instagram profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('instagram_field'); ?>" name="<?php echo $this->get_field_name('instagram_field'); ?>" type="text" 
    value="<?php echo esc_attr( $instagram ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('googleplus_field'); ?>"><?php _e('Enter the URL for your Google Plus profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('googleplus_field'); ?>" name="<?php echo $this->get_field_name('googleplus_field'); ?>" type="text" 
    value="<?php echo esc_attr( $googleplus ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('yelp_field'); ?>"><?php _e('Enter the URL for your Yelp page', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('yelp_field'); ?>" name="<?php echo $this->get_field_name('yelp_field'); ?>" type="text" 
    value="<?php echo esc_attr( $yelp ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('youtube_field'); ?>"><?php _e('Enter the URL for your YouTube page', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('youtube_field'); ?>" name="<?php echo $this->get_field_name('youtube_field'); ?>" type="text" 
    value="<?php echo esc_attr( $youtube ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('linkedin_field'); ?>"><?php _e('Enter the URL for your LinkedIn profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('linkedin_field'); ?>" name="<?php echo $this->get_field_name('linkedin_field'); ?>" type="text" 
    value="<?php echo esc_attr( $linkedin ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('behance_field'); ?>"><?php _e('Enter the URL for your Behance profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('behance_field'); ?>" name="<?php echo $this->get_field_name('behance_field'); ?>" type="text" 
    value="<?php echo esc_attr( $behance ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('dribbble_field'); ?>"><?php _e('Enter the URL for your Dribbble profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('dribbble_field'); ?>" name="<?php echo $this->get_field_name('dribbble_field'); ?>" type="text" 
    value="<?php echo esc_attr( $dribbble ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('github_field'); ?>"><?php _e('Enter the URL for your GitHub profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('github_field'); ?>" name="<?php echo $this->get_field_name('github_field'); ?>" type="text" 
    value="<?php echo esc_attr( $github ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('skype_field'); ?>"><?php _e('Enter the URL for your Skype profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('skype_field'); ?>" name="<?php echo $this->get_field_name('skype_field'); ?>" type="text" 
    value="<?php echo esc_attr( $skype ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('vimeo_field'); ?>"><?php _e('Enter the URL for your Vimeo profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('vimeo_field'); ?>" name="<?php echo $this->get_field_name('vimeo_field'); ?>" type="text" 
    value="<?php echo esc_attr( $vimeo ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('vine_field'); ?>"><?php _e('Enter the URL for your Vine profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('vine_field'); ?>" name="<?php echo $this->get_field_name('vine_field'); ?>" type="text" 
    value="<?php echo esc_attr( $vine ); ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('tumblr_field'); ?>"><?php _e('Enter the URL for your tumblr profile', 'lightworker'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('tumblr_field'); ?>" name="<?php echo $this->get_field_name('tumblr_field'); ?>" type="text" 
    value="<?php echo esc_attr( $tumblr ); ?>" />
    </p>

    <?php 
  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['facebook'] = strip_tags( $new_instance['facebook_field'] );
    $instance['twitter'] = strip_tags( $new_instance['twitter_field'] );
    $instance['pinterest'] = strip_tags( $new_instance['pinterest_field'] );
    $instance['instagram'] = strip_tags( $new_instance['instagram_field'] );
    $instance['googleplus'] = strip_tags( $new_instance['googleplus_field'] );
    $instance['yelp'] = strip_tags( $new_instance['yelp_field'] );
    $instance['youtube'] = strip_tags( $new_instance['youtube_field'] );
    $instance['linkedin'] = strip_tags( $new_instance['linkedin_field'] );
    $instance['behance'] = strip_tags( $new_instance['behance_field'] );
    $instance['dribbble'] = strip_tags( $new_instance['dribbble_field'] );
    $instance['github'] = strip_tags( $new_instance['github_field'] );
    $instance['skype'] = strip_tags( $new_instance['skype_field'] );
    $instance['vimeo'] = strip_tags( $new_instance['vimeo_field'] );
    $instance['vine'] = strip_tags( $new_instance['vine_field'] );
    $instance['tumblr'] = strip_tags( $new_instance['tumblr_field'] );
    return $instance;
  }

} // class social_widget_sidebar

?>