<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

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
									Monday – Friday: 9AM – 8PM <br/>
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
