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
	<script src="<?php echo get_template_directory_uri(); ?>/js/phone-replace.js"></script>
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
		<nav class="navbar navbar-custom" id="slide-nav">
			<div class="container-fluid">
				<div class="header-phone-number text-right">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<a href="tel:877-557-4145" class="phone_container">877-557-4145</a>
				</div>
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
	<?php
	$image = get_field('bg-page');
	if( !empty($image) ){ ?>
		<?php if (is_front_page()) {?>
			<div class="background-section" style="height: 735px; background: url('<?php echo $image['url']; ?>') center no-repeat; background-size: cover">
			<div class="content-page">
				<div class="middle-block text-center">
					<p class="before-slogan">
						Pain Management & Medical Services
					</p>
					<h1 class="slogan">
						WE CARE ABOUT YOUR HEALTH!
					</h1>
					<p>
						<a href="https://www.zocdoc.com/practice/arkadiy-shusterman-22635?referrerType=widget" target="_blank">
							BOOK ONLINE
						</a>
					</p>
				</div>
			</div>
		</div>
		<?php }else {?>
			<div class="background-section" style="height: 735px; background: url('<?php echo $image['url']; ?>') center no-repeat; background-size: cover">
				<div class="content-page">
					<div class="middle-block single-page text-center">
						<h1 class="slogan">
							<?php echo get_the_title();?>
						</h1>
					</div>
				</div>
			</div>
		<?php }?>
	<?php }else{?>
	<?php
		$linkAboutUs = "/about-us/";
		$currentLink = $_SERVER["REQUEST_URI"];
		if($linkAboutUs == $currentLink):?>
		<div class="about-us-slider">
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-7.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-2.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-3.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-4.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-5.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-6.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-8.jpg" alt=""/>
				<div class="dark-layer"></div>
			</div>
		</div>
		<?php endif;?>
	<?php } ?>

	<?php if ( is_single() ) {?>
	<?php
	$imagePost = get_field('bg-image-services');
	if( !empty($imagePost) ) { ?>
		<div class="background-section" style="height: 735px; background: url('<?php echo $imagePost['url']; ?>') center no-repeat; background-size: cover">
			<div class="content-page">
				<div class="middle-block single-page text-center">
					<p class="before-slogan">
						
					</p>
					<h1 class="slogan">
						<?php echo get_the_title();?>
					</h1>
				</div>
			</div>
		</div>
	<?php }else{?>
		<div class="background-section" style="height: 735px; background: url('<?php echo get_template_directory_uri(); ?>/assets/img/Meaningful-Use-1.jpg') center no-repeat; background-size: cover">
			<div class="content-page">
				<div class="middle-block single-page text-center">
					<h1 class="slogan">
						<?php echo get_the_title();?>
					</h1>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php } ?>
