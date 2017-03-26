<?php get_header(); ?>

<!-- START CONTENT -->

<!-- query for front page -->
    <?php
        $args = array(
            'pagename' => 'home',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="jumbotron">
                <div class="container full-width">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<!-- END CONTENT -->

<?php get_footer(); ?>