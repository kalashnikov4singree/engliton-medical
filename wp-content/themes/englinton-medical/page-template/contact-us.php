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
                        <div class="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="205" title="Contact Us" html_class="contact-us-form"]'); ?>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3025.0778299095173!2d-73.84967309665068!3d40.694283509566105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25dfdb6d790c3%3A0x9aad53b9a8627c5b!2zOTUtMjUgSmFtYWljYSBBdmUsIFF1ZWVucywgTlkgMTE0MjEsINCh0KjQkA!5e0!3m2!1sru!2sua!4v1467380340353" frameborder="0" style="width: 100%;height: 500px;border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Page Content End -->
<?php get_footer() ?>