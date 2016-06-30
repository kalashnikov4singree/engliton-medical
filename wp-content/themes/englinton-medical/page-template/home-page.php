<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
    <div class="wrapper">
        <div class="container">
            <div class="our-specialities section">
                <div class="title-block text-center">
                    <a href="#">
                        Our Specialities
                    </a>
                </div>
                <div class="row">
               <?php
                query_posts('cat=2&showposts=6');
                while (have_posts()) : the_post();?>
                    <div class="col-sm-4">
                        <div class="item text-center">
                            <div class="img-item">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="title-item">
                                <?php the_title(); ?>
                            </div>
                            <div class="learn-more">
                                <a href="/services/#<?php the_field('anchor-link'); ?>">
                                    Learn More
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
                </div>
            </div>
            <div class="insurance section text-center">
                <div class="title-block">
                    Insurance
                </div>
                <div class="content">
                    WE ACCEPTS MOST MAJOR MEDICAL INSURANCE'S AS WELL AS MEDICARE/MEDICAID,
                    MAJOR WORKERS UNION HEALTH PLANS, NO-FAULT AND WORKERS COMP,
                    FOR MORE INFORMATION PLEASE CALL OUR OFFICE FOR INSURANCE VERIFICATION
                </div>
                <div class="img-block ">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-insurance.png" alt=""/>
                </div>
            </div>
            <div class="section">
                <div class="text-after-insurance">
                    <div class="text-justify">
                        <p>
                            Our experienced, compassionate staff is dedicated to helping patients recover in a positive,
                            supportive atmosphere. Following an accident, injury, illness, or surgery, many people are
                            in need of therapy, pain management, and other treatments designed to aid in the recuperation
                            process. We know that an injury is never simple, and recuperation often involves a great deal
                            of time, pain, and frustration. That's why our multi-disciplined team focuses on combining
                            the best that medicine has to offer with a human touch, motivating you to work towards your
                            recovery at a reasonable pace and to push yourself to new levels of success.
                        </p>
                    </div>
                    <div class="text-justify">
                        <p>
                            Englinton Medical’s approach to total health and well-being combines physical medicine, neurology,
                            internal medicine, chiropractic treatment, physical therapy, acupuncture, pain management
                            and massage therapy. Our doctors and physical therapists are committed to providing you with
                            personalized and effective therapy plans, designed to get you enjoying life once again.
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="end-text">
                            If you are suffering from pain, injury or degenerative conditions,
                            give us a call today to learn how we can help you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonials">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="item">
                            <div class="quote">
                                “
                            </div>
                            <div class="message">
                                Excellent doctors. Knowledgeable staff, a great place to come for physical therapy.
                                The waits aren’t very long as some other PT locations in the city; big plus!
                                Transportation available and friendly front desk, can’t ask for more.
                            </div>
                            <div class="author">
                                — Yelp Reviewer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="item">
                            <div class="quote">
                                “
                            </div>
                            <div class="message">
                                This is by far the most friendly office I’ve ever seen.
                                I truly appreciate the amount of time, care,
                                and compassion these docs and physical therapists have given me.
                                Find Dr. Aby the chiropractor... He’s a really special guy!!
                            </div>
                            <div class="author">
                                — Greg Yunov, Google Reviewer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <div class="item">
                            <div class="quote">
                                “
                            </div>
                            <div class="message">
                                I know most share my sentiment that going to a doctors office is a
                                total drag especially when ure treated like an item on an assembly line.
                                Not here! The staff is unrealistically friendly and took care of me medically
                                and explained the workers comp process to me better than my attorney.
                                What the previous reviewer wrote is absolutely on point...the interior is beautiful,
                                newly renovated with all new equipment. Definitely would recommend
                                to anyone seeking a medical rehabilitation facility
                            </div>
                            <div class="author">
                                — Daniel Katlets - Google Reviewer
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><!-- Page Content End -->

<?php get_footer() ?>