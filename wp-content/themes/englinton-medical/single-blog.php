<?php setPostViews(get_the_ID()); ?>
    <div class="container">
        <div class="blog-page-content">
            <div class="row">
                <?php include ('page-template/blog-part/tags.php')?>
                <div class="col-xs-12 col-sm-6">
                    <div class="post-content">
                        <div class="top-post">
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="social-btn">
                                        <a class="facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=<?php echo the_permalink();?>&amp;p[title]=<?php echo the_title(); ?>">
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink();?>">
                                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo the_permalink();?>&amp;text=<?php echo the_title(); ?>">
                                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo the_permalink();?>">
                                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="tumbrl" target="_blank" href="http://www.tumblr.com/share?v=3&u=<?php echo the_permalink();?>">
                                            <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="date inline-block">
                                        <?php the_date(); ?>
                                    </div>
                                    <div class="comments inline-block">
                                                <span class="ico">
                                                 <i class="fa fa-comment" aria-hidden="true"></i>
                                               </span>
                                        (<?php comments_number('0', '1', '%'); ?>)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-item text-justify">
                            <?php
                            the_content( sprintf(
                                __( 'Continue reading %s', 'twentyfifteen' ),
                                the_title( '<span class="screen-reader-text">', '</span>', false )
                            ) );
                            ?>
                        </div>
                        <div class="bottom-post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="social-btn">
                                        <a class="facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=<?php echo the_permalink();?>&amp;p[title]=<?php echo the_title(); ?>">
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink();?>">
                                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo the_permalink();?>&amp;text=<?php echo the_title(); ?>">
                                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo the_permalink();?>">
                                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                        </a>
                                        <a class="tumbrl" target="_blank" href="http://www.tumblr.com/share?v=3&u=<?php echo the_permalink();?>">
                                            <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="comments inline-block">
                                                <span class="ico">
                                                 <i class="fa fa-comment" aria-hidden="true"></i>
                                               </span>
                                        (<?php comments_number('0', '1', '%'); ?>)
                                    </div>
                                </div>
                            </div>
                            <div class="next-prev-post">
                                <div class="next-prev">
                                    <?php if (in_category('blog')){ ?>
                                        <div class="alignleft">
                                            <?php previous_post_link('%link','<i class="fa fa-angle-left" aria-hidden="true" style="left: 19px"></i> Previous Post',TRUE,'blog') ?>
                                        </div>
                                        <div class="alignright"><?php next_post_link('%link','Next Post <i class="fa fa-angle-right" aria-hidden="true" style="right: 19px"></i>',TRUE,'blog') ?></div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="comments-block" id="comments-blog">
                                <div class="title-block text-center">
                                    Comments
                                </div>
                                <?php
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include ('page-template/blog-part/popular-and-archive.php')?>
            </div>
        </div>
    </div>