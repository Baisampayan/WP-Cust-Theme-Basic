<?php get_header( ); ?>
    <?php if(have_posts( )) {
        while(have_posts( )){
            the_post( ); { ?>
                <a href="<?php the_permalink( ) ?>" title="<?php the_title_attribute( ); ?>"><h2><?php the_title( ); ?></h2></a>
                <?php the_content( ); ?>
            <?php }
        }
    } else { ?>
        <p>There is no post available according to your criteria.</p>
    <?php } ?>
<?php get_footer( ); ?>