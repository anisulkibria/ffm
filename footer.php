<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fastfundmortgage
 */

?>

	</div><!-- #content -->
	</div><!-- #conteiner -->
	
	<div id="footer" class="container-fluid">	
		<div class="container footer-container">
			<footer id="colophon" class="site-footer">
				<div class="site-info text-center">
					<img class="ehllogo" src="<?php echo get_template_directory_uri() . '/img/equal-housing-lender-logo.png'?>" alt=""><br> <p><b>Company NMLS 1653111</b></p>
					Copyright © 2019 Fast Fund Mortgage<br>
					Web Site Designed by <a href="http://fastfundmortgage.com/">Fast Fund Mortgage</a><br><br>
					<p>Disclaimer: please make sure to call our office before sending any sensitive financial information. <br>Online frauds are high and we want to make sure your information is safe and secure.</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
	</div><!-- #conteiner-fluid -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
