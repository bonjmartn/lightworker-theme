<?php get_header(); ?>

<div class="page-container">

    <div class="section group">

    <div class="col span_8_of_12">

        <div class="archives-header">
            <h1><?php wp_title(''); ?></h1>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

        <?php endwhile; else: ?>

        <div class="page-header">
            <h1 class="page-title"><?php _e( 'Oh no!', 'lightworker-basic' ); ?></h1>
        </div>

        <p><?php _e( 'No content is appearing for this page!', 'lightworker-basic' ); ?></p>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div> 

        <?php endif; ?>

        <div class="pagination">

        <?php the_posts_pagination( array( 
            'mid_size' => 2,
            'type' => 'list',
        )); ?>

        </div>

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

<?php get_footer(); ?>