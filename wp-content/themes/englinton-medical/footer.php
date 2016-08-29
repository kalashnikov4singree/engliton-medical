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
								<li><a href="/cdl">CDL</a></li>
								<li><a href="/clearance">CLEARANCE</a></li>
								<li><a href="/blog">BLOG</a></li>
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
									<a class="phone_container" href="tel:(877) 557-4145" onclick="ga ('send', 'event', 'calls', 'click_on_button_in_footer'); yaCounter38978050.reachGoal ('click_on_button_in_footer'); return true;">
										(877) 557-4145
									</a>
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
