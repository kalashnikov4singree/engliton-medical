<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="LGrnVKNnh3EJVTspz7x_2jHP__6ttevgYcUmDaQXM-o" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <!--[endif]-->
    <?php wp_head(); ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-82266768-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="header">
        <nav class="navbar" id="slide-nav">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"></button>
                    <a class="navbar-brand" href="/">
                        ENGLINTON
                        MEDICAL P.C.
                    </a>
                </div>
                <div id="slidemenu">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="header-menu" >
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/">HOME</a></li>
                            <li><a href="/about-us">ABOUT US</a></li>
                            <li><a href="/our-team">OUR TEAM</a></li>
                            <li><a href="/services">SERVICES</a></li>
                            <li><a href="/cdl">CDL</a></li>
                            <li><a href="/clearance">CLEARANCE</a></li>
                            <li><a href="/blog">BLOG</a></li>
                            <li class="contact-us text-center"><a href="/contact-us">CONTACT US</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>
<div id="page-content">
    <div class="background-section" style="height: 735px; background: url('<?php echo get_template_directory_uri(); ?>/assets/img/Meaningful-Use-1.jpg') center no-repeat; background-size: cover">
        <div class="content-page">
            <div class="middle-block single-page text-center">
                <h1 class="slogan">
                    <?php single_cat_title();?>
                </h1>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="blog-page-content">
                <div class="row">
                    <?php include ('page-template/blog-part/tags.php')?>
                    <div class="col-sm-6">
                        <div class="blogs-item">
                            <div class="row flex-row">
                                <?php
                                $tag = get_queried_object();
                                query_posts('cat=5&tag='.$tag->slug);
                                if ( have_posts() ) : $count = 0; while ( have_posts() )  : the_post(); $count++; ?>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="blog-item">
                                            <div class="top-item">
                                                <div class="date pull-left">
                                                    <?php the_date(); ?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>#comments-blog">
                                                    <div class="comments pull-right">
                                               <span class="ico">
                                                 <i class="fa fa-comment" aria-hidden="true"></i>
                                               </span>
                                                        (<?php comments_number('0', '1', '%'); ?>)
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="img-item">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail(); ?>
                                                </a>
                                            </div>
                                            <div class="content-blog">
                                                <div class="title-item">
                                                    <a href="<?php the_permalink(); ?>">
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
                        </div>
                    </div>
                    <?php include ('page-template/blog-part/popular-and-archive.php')?>
                </div>
            </div>
        </div>
    </div>
</div><!-- Page Content End -->
<footer>
    <div class="footer" id="footer-slide">
        <div class="top-footer"></div>
        <div class="bottom-footer">
            <div class="container">
                <div class="footer-brand text-left">
                    ENGLINTON MEDICAL P.C.
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="menu-footer">
                            <div class="title-footer">
                                Services:
                            </div>
                            <ul class="list-unstyled">
                                <li><a href="/">HOME</a></li>
                                <li><a href="/about-us">ABOUT US</a></li>
                                <li><a href="/our-team">OUR TEAM</a></li>
                                <li><a href="/services">SERVICES</a></li>
                                <li><a href="/cdl-clearance">CDL CLEARANCE</a></li>
                                <li><a href="/contact-us">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3 col-md-7 col-sm-offset-5 col-lg-6 col-lg-offset-6 title-footer">
                                Contact Us:
                            </div>
                            <div class="col-sm-9 col-sm-offset-3  col-md-7 col-sm-offset-5 col-lg-6 col-lg-offset-6">
                                <div class="address-block">
                                    95-25 Jamaica Ave
                                    Woodhaven, NY 11421 <br>
                                    (718) 441-4070
                                </div>
                                <div class="work-day">
                                    Monday – Thursday: 9AM – 8PM <br/>
                                    Friday: 9AM – 4PM <br/>
                                    Saturday: Closed <br/>
                                    Sunday: Closed <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/includes/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/includes/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/spike-nails.js"></script>
<?php wp_footer(); ?>

</body>
</html>

