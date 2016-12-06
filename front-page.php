<?php get_header(); ?>

<div class="page-container">

<!-- Bootstrap Carousel -->

    <div id="lightCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img id="first-slide" src="<?php echo get_theme_mod( 'slide_1_img' ); ?>" alt="<?php echo get_theme_mod( 'slide_1_headline' ); ?>">
          <div class="container">
            <div class="carousel-caption">
              <a href="<?php echo get_theme_mod( 'slide_1_link' ); ?>"><h1 id="headline-1"><?php echo get_theme_mod( 'slide_1_headline' ); ?></h1></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo get_theme_mod( 'slide_2_img' ); ?>" alt="<?php echo get_theme_mod( 'slide_2_headline' ); ?>">
          <div class="container">
            <div class="carousel-caption">
              <a href="<?php echo get_theme_mod( 'slide_2_link' ); ?>"><h1 id="headline-2"><?php echo get_theme_mod( 'slide_2_headline' ); ?></h1></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo get_theme_mod( 'slide_3_img' ); ?>" alt="<?php echo get_theme_mod( 'slide_3_headline' ); ?>">
          <div class="container">
            <div class="carousel-caption">
              <a href="<?php echo get_theme_mod( 'slide_3_link' ); ?>"><h1 id="headline-3"><?php echo get_theme_mod( 'slide_3_headline' ); ?></h1></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="<?php echo get_theme_mod( 'slide_4_img' ); ?>" alt="<?php echo get_theme_mod( 'slide_4_headline' ); ?>">
          <div class="container">
            <div class="carousel-caption">
              <a href="<?php echo get_theme_mod( 'slide_4_link' ); ?>"><h1 id="headline-4"><?php echo get_theme_mod( 'slide_4_headline' ); ?></h1></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="<?php echo get_theme_mod( 'slide_5_img' ); ?>" alt="<?php echo get_theme_mod( 'slide_5_headline' ); ?>">
          <div class="container">
            <div class="carousel-caption">
              <a href="<?php echo get_theme_mod( 'slide_5_link' ); ?>"><h1 id="headline-5"><?php echo get_theme_mod( 'slide_5_headline' ); ?></h1></a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#lightCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#lightCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- end of carousel -->

</div><!-- end of page container -->

<!-- Homepage 3 Boxes -->

<div class="page-container homepage-3">

    <div class="section group">

      <div class="col span_4_of_12 homepage-3-boxes">
      <?php if ( ! dynamic_sidebar( 'create-your-own-1') ): ?>
        <h3>Homepage Feature 1</h3>
        <p>Set up your content with a widget. Go to Appearance > Widgets and use the Homepage Feature widget.</p>
      <?php endif; ?>
      </div>

      <div class="col span_4_of_12 homepage-3-boxes">
      <?php if ( ! dynamic_sidebar( 'create-your-own-2') ): ?>
        <h3>Homepage Feature 2</h3>
        <p>Set up your content with a widget. Go to Appearance > Widgets and use the Homepage Feature widget.</p>
      <?php endif; ?>
      </div>

      <div class="col span_4_of_12 homepage-3-boxes">
      <?php if ( ! dynamic_sidebar( 'create-your-own-3') ): ?>
        <h3>Homepage Feature 3</h3>
        <p>Set up your content with a widget. Go to Appearance > Widgets and use the Homepage Feature widget.</p>
      <?php endif; ?>
      </div>

    </div>         

</div> 

<!-- Posts and Sidebar -->

<div class="page-container">

  <div class="section group">

    <div class="col span_8_of_12">

      <h3 class="latest-posts">Latest Posts</h3>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; else : ?>

      <p><?php _e( 'Sorry, no posts matched your criteria.', 'lightworker' ); ?></p>

      <?php endif; ?> 

      <?php
        $args = array( 'posts_per_page' => 6, 'orderby' => 'date' );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
        setup_postdata( $post ); ?> 

      <div class="section group">

        <div class="col span_6_of_12">
          <p class="recent-post-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a></p>
        </div>
      
        <div class="col span_6_of_12">
          <h3 class="recent-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="recent-post-meta">Posted on <?php echo the_time('F jS, Y');?> in <?php the_category( ', ' ); ?> 
          with <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>
          <p><?php the_excerpt(); ?></p>
        </div>

      </div>

      <hr>

        <?php
        endforeach; 
        wp_reset_postdata();
        ?>

    </div>

    <div class="col span_4_of_12">

      <div class="sidebar sidebar-home ">

        <?php if ( ! dynamic_sidebar( 'blog' ) ): ?>

          <h3>Sidebar Setup</h3>
          <p>Add widgets to the blog sidebar by going to Appearance > Widgets and adding widgets to the "Blog Sidebar" section.</p>

        <?php endif; ?>

      </div>

    </div>
      
  </div>

</div>  

<div class="footer-cta">

  <?php if ( ! dynamic_sidebar( 'front-bar') ): ?>
    <h3>Call to Action Bar Setup</h3>
    <p>Set up your call to action bar with a widget.<br>Go to Appearance > Widgets. Drag the "Call to Action Bar" widget to the "Call to Action Bar" section.</p>
  <?php endif; ?>

</div>

</div><!-- end of page container -->

<?php get_footer(); ?>