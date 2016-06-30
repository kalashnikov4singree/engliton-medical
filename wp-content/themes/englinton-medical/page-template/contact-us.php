<?php
/**
 * Template Name: Contact Us Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
    <div class="wrapper">
        <div class="container">
            <div class="contact-us-content">
            <div class="row">
                <div class="col-sm-6">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48049518.783250526!2d-129.5563690932181!3d42.68868734941173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDE5JzIzLjkiTiAxMDDCsDIyJzM0LjQiVw!5e0!3m2!1sru!2sua!4v1467316513346"  frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
                 </div>
            </div>

            </div>
        </div>
    </div>
</div><!-- Page Content End -->
<?php get_footer() ?>