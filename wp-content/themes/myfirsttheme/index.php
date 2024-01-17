<?php get_header( ); ?>
    <?php if(have_posts( )) {
        while(have_posts( )){
            the_post( ); { ?>
                <a href="<?php the_permalink( ) ?>" title="<?php the_title_attribute( ); ?>"><h2><?php the_title( ); ?></h2></a>
                <div>
                    <!-- Getting the Post Meta Template from function -> lib -> helpers.php -->
                    <?php _themename_post_meta_template(); ?>
                </div>
                <div>
                    <?php the_excerpt(  ); ?>
                </div>
                    <!-- Getting the Read More Template from function -> lib -> helpers.php -->
                    <?php _themename_readmore_template(); ?>
                <?php /* the_content( ); */?>
            <?php }
        } the_posts_pagination( );
        /* Creating Custom Action Hooks */
        do_action( '_themename_after_pagination' );
    } else { ?>
        <p><?php esc_html_e( 'There is no post available according to your criteria.', '_themename' ); ?></p>
    <?php } ?>

    <!-- Testing -->
    <?php
        // $comments = 1;
        // printf(_n('One Comment', '%s Comments', $comments, '_themename'), $comments);
    ?>
<?php get_footer( ); ?>