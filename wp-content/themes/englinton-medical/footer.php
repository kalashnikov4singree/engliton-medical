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
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="footer-brand text-left">
							ENGLINTON MEDICAL P.C.
						</div>
					</div>
					<div class="col-sm-6 col-md-7">
						<div class="address-block">
							95-25 Jamaica Ave
							Woodhaven, NY 11421 3<br>
							<a class="phone_container" href="tel:+18775574145" onclick="ga ('send', 'event', 'calls', 'click_on_button_in_footer'); yaCounter38978050.reachGoal ('click_on_button_in_footer'); return true;">
								(877) 557-4145
							</a>
						</div>
						<div class="work-day">
							Monday – Thursday: 9AM – 8PM <br/>
							Friday: 9AM – 4PM <br/>
							Saturday: Closed <br/>
							Sunday: Closed <br/>
						</div>
						<div class="social-links">
							<div class="link">
								<a class="facebook" href="https://www.facebook.com/integretivemedicine/" target="_blank">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>
							</div>
							<div class="link">
								<a class="twitter" href="https://twitter.com/IntegrativeNY" target="_blank">
									<i class="fa fa-twitter-square" aria-hidden="true"></i>
								</a>
							</div>
							<div class="link">
								<a class="google-plus" href="https://plus.google.com/u/1/b/112672131119985965669/112672131119985965669/posts?gmbpt=true&amp;hl=en" target="_blank">
									<i class="fa fa-google-plus-square" aria-hidden="true"></i>
								</a>
							</div>
							<div class="link">
								<a class="pinterest" href="https://www.pinterest.com/IntegrativeNY/ " target="_blank">
									<i class="fa fa-pinterest-square" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-5">
						<div class="menu-footer pull-left">
							<?php
							wp_nav_menu( array(
								'menu_id' => 'Site Menu',
								'menu_class'=> 'list-unstyled'
							) );
							?>
							<!--<ul class="list-unstyled">
								<li><a href="/">HOME</a></li>
								<li><a href="/about-us">ABOUT US</a></li>
								<li><a href="/our-team">OUR TEAM</a></li>
								<li><a href="/services">SERVICES</a></li>
								<li><a href="/cdl">CDL</a></li>
								<li><a href="/clearance">CLEARANCE</a></li>
								<li><a href="/blog">BLOG</a></li>
								<li><a href="/contact-us">CONTACT US</a></li>
							</ul>-->
						</div>
						<div class="services-footer pull-left">
							<ul class="list-unstyled">
								<?php
								query_posts('cat=2&showposts=999999');
								while (have_posts()) : the_post();?>
									<li>
										<a href="<?php the_permalink();?>">
											<?php the_title(); ?>
										</a>
									</li>
								<?php endwhile;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="copyright pull-left">
					© ENGLINTON MEDICAL P.C. 2016
				</div>
				<div class="bottom-links">
					<ul class="list-unstyled">
						<li>
							<a href="#">
								Terms of Use
							</a>
						</li>
						<li>
							<a href="#">
								Disclaimer
							</a>
						</li>
						<li>
							<a href="#">
								Privacy Policy
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="modal fade modal-service" id="modalService" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/close-modal.png" alt="">
				</button>
				<div class="modal-title text-center">
					Request an Appointment
				</div>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode('[contact-form-7 id="206" title="Request an Appointment"]'); ?>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/includes/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/includes/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/spike-nails.js"></script>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter38978050 = new Ya.Metrika({
					id:38978050,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38978050" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
