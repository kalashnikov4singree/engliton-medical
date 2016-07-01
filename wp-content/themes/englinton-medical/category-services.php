<?php
/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
    <div class="wrapper">
        <div class="container">
            <div class="services-content">
                <div class="content-page text-center">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
                </div>
                <div class="services">
                 <?php
                    query_posts('cat=2');
                    if ( have_posts() ) : $count = 0; while ( have_posts() )  : the_post(); $count++; ?>
                        <?php if ($count % 2 == 0 ){ ?>
                            <div id="<?php the_field('anchor-link'); ?>" class="item">
                                <div class="title text-center">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-block">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="content-block">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }else{?>
                            <div id="<?php the_field('anchor-link'); ?>" class="item">
                                <div class="title text-center">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="col-sm-6">
                                    <div class="content-block">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="img-block">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- Page Content End -->
<?php get_footer() ?>