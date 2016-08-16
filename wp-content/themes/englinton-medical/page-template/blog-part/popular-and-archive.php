<div class="col-xs-12 col-sm-3 popular-archive">
    <div class="row">
        <div class="col-xs-12">
            <div class="popular-post">
                <div class="title-block text-center">
                    Popular-post
                </div>
                <?php $populargb = new WP_Query('cat=5&showposts=5&meta_key=post_views_count&orderby=meta_value_num' );
                while ( $populargb->have_posts() ) {
                    $populargb->the_post(); ?>
                    <div class="item">
                        <div class="popular-title">
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="bottom-item">
                            <div class="post-date pull-left">
                          <span class="ico-date ico-block">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                                <?php the_time(get_option('date_format')); ?>
                            </div>
                            <div class="post-comments pull-right">
                                <a href="<?php the_permalink(); ?>#comments-blog">
                                      <span class="ico-comment ico-block">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                      </span>
                                    <?php comments_number('0', '1', '%'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="archive-blog">
                <div class="title-block text-center">
                    Archive
                </div>
                <div class="panel-group" id="accordion-blog" role="tablist" aria-multiselectable="true">
                    <?php
                    archive_filter_blog();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>