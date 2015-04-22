<?php

	/**
	 * FOOTER
	 *
	 * Aesthetic Perspectives
	 *
	 * @package WordPress
	 * @subpackage Aesthetic_Perspectives
	 * @since Aesthetic Perspectives 1.0
	 */
 
?>

	<div id="footer" class="one column">
		<h1><a class="link-none" href="/">aesthetic perspectives</a></h1>
		<h5>© 2014. Posted with <span class="red">♥</span> in Brooklyn</h5>
	</div>
</div>
<?php wp_footer(); ?>
<footer>
<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" charset="utf-8">
	$('#mobile-icon').click(function(){
		$('nav, #mobile-header').slideToggle();
		return false;
	});
	</script>
	<!-- Flexslider -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script>
	<!-- Fancybox -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$(".action").fancybox();
		});
	</script>
	<!-- Sticky -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
		    $(".sticky").sticky({topSpacing:50});
		  });
	</script>
	<!-- Google Analytics -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34350709-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</footer>
<!-- END :) -->
</body>
</html>