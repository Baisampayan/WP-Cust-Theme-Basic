<?php

function myfirsttheme_post_meta_template() {
    printf(esc_html__( 'Posted on %s', 'myfirsttheme' ),
        '<a href="' . esc_url(get_the_permalink( )) . '"><time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time></a>'
    );

    printf(esc_html__( ' | By %s', 'myfirsttheme' ),
        '<a href="' . esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . '">' . esc_html(get_the_author( )) . '</a>'
    );
}

function myfirsttheme_readmore_template() {
    echo '<a href="' . esc_url(get_permalink( )) . '" title="' . the_title_attribute(['echo'=> false]) . '"> Read More<span class="u-screen-reader-text"> About ' . get_the_title( ) . '</span></a>';
}
?>