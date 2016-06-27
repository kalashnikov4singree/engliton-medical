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
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="header">
		<nav class="navbar" id="slide-nav">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
					<a class="navbar-brand" href="/">
						ENGLINTON <br/>
						MEDICAL P.C.
					</a>
				</div>
				<div id="slidemenu">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="header-menu" >
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">HOME</a></li>
							<li><a href="#">ABOUT US</a></li>
							<li><a href="#">OUR TEAM</a></li>
							<li><a href="#">SERVICESk</a></li>
							<li><a href="/cdl-clearance">CDL CLEARANCE</a></li>
							<li class="contact-us text-center"><a href="#">CONTACT US</a></li>
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

	if( !empty($image) ): ?>
		<div class="background-section" style="height: 735px; background: url('<?php echo $image['url']; ?>') center no-repeat; background-size: cover">
			<div class="content-page">
				<div class="middle-block text-center">
					<p class="before-slogan">
						Pain Management & Medical Services
					</p>
					<p class="slogan">
						WE CARE ABOUT YOUR HEALTH!
					</p>
					<p>
						<a href="#" target="_blank">
							BOOK ONLINE
						</a>
					</p>
				</div>
			</div>
		</div>
	<?php endif; ?>
