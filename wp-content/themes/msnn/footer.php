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
					<h4><?php the_field('contact_title','option');?></h4>					
					<div class="col">
					<?php the_field('contact_description','option');?>
						<img src="<?php echo get_template_directory_uri(); ?>/nc_files/images/deco.jpg" alt="" width="" height=""/>
					</div>
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="23" title="Contact form"]');?>
					</div>
					
				</div><!--footer top end-->						
				
				<div id="footer-bottom">
					<img id="footer-logo" src="<?php the_field('comapy_logo_footer','option');?>" alt="" width="" height=""/>					
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

