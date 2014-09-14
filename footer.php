<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>



			
	</section><!-- / end page container, begun in the header -->
			
	<footer id="footer" class="clearfix"> 
		<small id="copyright">		
			All content © The Woolley Market Co., SPC. 2014
	 	</small>
	</footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.simpleWeather.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.localScroll.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swipe.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	
	
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
