<!-- PHP files are edited by replacing the parent theme file entirely with a new one. The parent theme’s original file is ignored and the new one in the child theme is used instead. --> 	
		<footer>
		<div class='row'>
			<div class='col-xs-12 col-sm-4'>
				<?php wp_nav_menu(array('theme_location'=>'primary')); /* same name as in functions.php */  ?>
			</div>
			<div class='col-xs-12 col-sm-4'>
				Circus Monkey WordPress Theme Copyright 2016 Joe UX Designer
				<address>123 Main St. Honolulu, HI 96815</address>		
			</div>
			<div class='col-xs-12 col-sm-4'>
				This is the child theme's footer.php file.
			</div>
		</div>
		</footer>

		<?php wp_footer(); //grabs footer functions ?>

	<!-- </div> --><!-- .container -->


     <!-- 
     authorship information
    copyright information
    contact information
    sitemap
    back to top links
    related documents -->


	</body>
</html>