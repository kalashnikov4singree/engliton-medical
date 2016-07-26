<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>
<div class="wrapper">
    <div class="container">
        <div class="blog-page-content">
            <div class="row">
                <div class="col-sm-3">
                    <div class="tag-block">
                        <div class="title-block text-center">
                            Tag
                        </div>
                        <div class="list-tags">
                            <?php if ( function_exists('wp_tag_cloud') ){ ?>
                                <ul class="list-unstyled">
                                    <li>
                                        <?php wp_tag_cloud('number=0&orderby=name&order=ASC'); ?>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="blogs-item">
                        <div class="row flex-row">
                            <?php query_posts('cat=5');
                            if ( have_posts() ) : $count = 0; while ( have_posts() )  : the_post(); ?>
                                <div class="col-sm-12 col-md-6">
                                    <div class="blog-item">
                                        <div class="top-item">
                                            <div class="date pull-left">
                                                <?php the_date(); ?>
                                            </div>
                                            <div class="comments pull-right">
                                   <span class="ico">
                                     <i class="fa fa-comment" aria-hidden="true"></i>
                                   </span>
                                                (<?php comments_number('0', '1', '%'); ?>)
                                            </div>
                                        </div>
                                        <div class="img-item">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div>
                                        <div class="content-blog">
                                            <div class="title-item">
                                                <a href="#">
                                                    <?php the_title(); ?>
                                                </a>
                                            </div>
                                            <div class="description-item text-justify">
                                                <?php echo mb_substr( strip_tags( get_the_content()), 0, 350 ); ?>
                                                [<a href="<?php the_permalink(); ?>">...</a>]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php the_posts_pagination( array(
                            'mid_size' => 2,
                        ) ); ?>
                    </div>
                </div>
                <div class="col-sm-3">
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
                                        <?php the_date(); ?>
                                    </div>
                                    <div class="post-comments pull-right">
                              <span class="ico-comment ico-block">
                                <i class="fa fa-comment" aria-hidden="true"></i>
                              </span>
                                        <?php comments_number('0', '1', '%'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- Page Content End -->

<?php get_footer() ?>
