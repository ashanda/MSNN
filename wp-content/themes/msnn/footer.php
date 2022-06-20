<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package msnn
 */

?>
			<div id="footer-wrapper">				
				<div id="footer-top">				
					<h4>don’t struggle alone anymore- we can do this together!</h4>					
					<div class="col">
						<p>All you need to do to find out if this is for you is to get in touch.  
						I can offer you a FREE 30 minute discovery call and we will take it from there.
						Call Melanie on <strong>07305 528610</strong> or simply enter your details here and I will get back to you.</p>  
						 
						<p><strong>Food doesn’t have to be a problem. Let’s talk.</strong></p>
						<img src="<?php echo get_template_directory_uri(); ?>/nc_files/images/deco.jpg" alt="" width="" height=""/>
					</div>
					<div class="contact-form">
						<form>
							<p><input type="text" name="" placeholder="Name"/></p>
							<p><input type="email" name="" placeholder="Email"/></p>
							<p><input type="text" name="" placeholder="Phone"/></p>
							<input type="submit" name="" value="SEND"/>							
						</form>
					</div>
					
				</div><!--footer top end-->						
				
				<div id="footer-bottom">
					<img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/footer-logo.png" alt="" width="" height=""/>					
					<p>&copy; MSN Nutrition  - <a href="#" target="_blank">Website  by Designfolk</a></p>
				</div><!--footer bottom end-->	
				
			</div><!--footer wrapper end-->		
			
		</div><!--main wrapper end-->
		
		<!--script-->		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/lightslider/src/js/lightslider.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/ui.js"></script>
		<?php wp_footer(); ?>	
	</body>
</html>

