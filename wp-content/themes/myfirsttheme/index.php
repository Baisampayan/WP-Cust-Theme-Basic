<?php get_header( ); ?>
    <?php if(have_posts( )) {
        while(have_posts( )){
            the_post( ); { ?>
                <a href="<?php the_permalink( ) ?>" title="<?php the_title_attribute( ); ?>"><h2><?php the_title( ); ?></h2></a>
                <div>
                    Posted on
                    <a href="<?php echo get_the_permalink( ); ?>">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date();?></time>
                    </a>
                    &nbsp| By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author( ); ?></a>
                </div>
                <div>
                    <?php the_excerpt(  ); ?>
                </div>
                <a href="<?php echo get_the_permalink( ); ?>" title="<?php the_title_attribute( ); ?>">Read More</a>
                <?php /* the_content( ); */?>
            <?php }
        } the_posts_pagination( );
    } else { ?>
        <p>There is no post available according to your criteria.</p>
    <?php } ?>
<?php get_footer( ); ?>