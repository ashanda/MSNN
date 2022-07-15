<?php
/*
Template Name: FAQ
*/
get_header();  
get_template_part( 'template-parts/inner', 'banner' );?>
<div id="inner-content">
				<div class="text-content">
					<h1><?php the_field('main_title');?></h1>
					<hr/>
				</div>
				<?php if( have_rows('faqs') ): ?>
				
				<?php while( have_rows('faqs') ): the_row();?>
					
				<div class="faq-row"> 
					<h3><?php the_sub_field('question'); ?></h3>
					<p><?php the_sub_field('answer'); ?></p>
					<hr/>
				</div>
				<?php endwhile; ?>
				
			<?php endif; ?>
						
						
			</div><!--inner content end-->
			
			<div id="image-banner"
    style="background-image:url(<?php the_field('footer_banner_image'); ?>)"></div>
			



<?php get_footer(); ?>