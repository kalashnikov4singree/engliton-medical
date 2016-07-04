<?php
/* translators: %s: Name of current post */
the_content( sprintf(
    __( 'Continue reading %s', 'twentyfifteen' ),
    the_title( '<span class="screen-reader-text">', '</span>', false )
) );

//wp_link_pages( array(
//    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
//    'after'       => '</div>',
//    'link_before' => '<span>',
//    'link_after'  => '</span>',
//    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
//    'separator'   => '<span class="screen-reader-text">, </span>',
//) );
?>