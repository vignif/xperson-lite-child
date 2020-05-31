<?php
/**
 * The template for displaying the footer.
 * @package WordPress
 * @SketchThemes
 */
global $xpersonlite;
?><!-- Footer Section -->
	<footer class="footer-wrapper">
	  <div class="container">
		<div class="row">
		  <div class="col-md-12">
			<div class="copyright text-center">
			  <?php if( isset($xpersonlite['skt-copyright-text']) ) {
			  		echo wp_kses_post($xpersonlite['skt-copyright-text']);
			  } ?>
			</div>
			<div class="credits text-center">
Born in <a href="https://en.wikipedia.org/wiki/Forl%C3%AC">Forli</a> developed in <a href="https://en.wikipedia.org/wiki/Siena">Siena </a> currently in <a href="https://en.wikipedia.org/wiki/Munich">Munich</a>			  
			</div>
		  </div>
		</div>
	  </div>
	</footer><!-- End Footer Section -->


	<!-- Scroll-up -->
	<div class="scroll-up">
		<div class="hex"><a href="#xperson-top"><i class="fa fa-angle-up"></i></a></div>
	</div>

<?php wp_footer(); ?>
</body>
</html>
