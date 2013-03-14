<footer id="footer" class="footer">
		
		<section class="wrap">
		
		<article class="grid-half">
			<nav>
				<ul class="nav">
					<li>Sitemap</li>
					<li>/</li>
					<li>Terms &amp; Conditions</li>
					<li>/</li>
					<li>Contact Us</li>
				</ul>
			</nav>
		</article>
	
			<article class="copryright text-right last grid-half">
				<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
			</article>
			
</section>
		</footer>

	<?php wp_footer(); ?>

<!-- this is where we put our custom functions -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
<script type="text/javascript" src="https://raw.github.com/okouam/jquery-bbq/master/jquery.ba-bbq.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jquery.simplePagination.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jquery.customSelect.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
