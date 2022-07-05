<?php
/*
Template Name: Service
*/
get_header();  
get_template_part( 'template-parts/inner', 'banner' );?>
<div id="inner-content">
				<div class="service-text-content">
					<h1><?php the_field('main_title');?></h1>	
					<hr/>
					<?php the_field('description');?>			
					
				</div>
			</div><!--inner content end-->
			
			<div class="service-blocks">
			<?php
			$args = array(  
			'post_type' => 'services',
			'post_status' => 'publish',
			'posts_per_page' => 3, 
			'orderby' => 'title', 
			'order' => 'ASC', 
		);

		$loop = new WP_Query( $args ); 
			
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="service-col"> 
					<h3><?php the_title();?></h3>
					<hr/>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink();?> ">more info / prices</a>
				</div>
			
			
		<?php
		endwhile;

		wp_reset_postdata();
		?>
				
				
				
			</div><!--service blocks end-->		
			
			<div id="image-banner"
    style="background-image:url(<?php the_field('footer_banner_image'); ?>)"></div>


<?php get_footer(); ?>