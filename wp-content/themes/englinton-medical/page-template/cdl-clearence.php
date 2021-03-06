<?php
/**
 * Template Name: CDL CLEARANCE
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
    <div class="wrapper">
        <div class="container">
            <div class="cdl-clearence-content">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div><!-- Page Content End -->

<?php get_footer() ?>