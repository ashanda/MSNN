<?php
get_header();  
get_template_part( 'template-parts/inner', 'banner' );?> 
<?php while ( have_posts() ) : the_post(); ?>
<div id="inner-content">
				<div class="text-content">
					<h1><?php the_title();?></h1>
					<hr/>
					<p><?php the_content();?></p>						
				</div>
				<?php if( have_rows('content_block') ): ?>
					
					<?php while( have_rows('content_block') ): the_row();?>
					<div class="content-blocks"> 
					<img class="deco"  src="<?php echo get_template_directory_uri(); ?>/inc_files/images/deco2.png" alt="" width="" height=""/>	
					<div class="row">
						<h3><?php the_sub_field('title'); ?> - <span><?php the_sub_field('cost'); ?></span></h3>
						<hr/>
						<div class="col left-align">
						   <?php the_sub_field('description'); ?>
						</div>
						<div class="col right-align">
						<?php if( have_rows('key_points') ): ?>
							<ul>
							<?php while( have_rows('key_points') ): the_row();?>
								<li>
									<?php the_sub_field('item'); ?>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
							
						</div>
					</div>
					<a href="<?php the_sub_field('caption'); ?>" class="button">book now</a>
				</div><!--content blocks end-->
						
					<?php endwhile; ?>
					
				<?php endif; ?>
				
				
				
				
				<div class="banana-text"> 
					<h4><?php the_field('not_doing_title');?></h4>
					<p><?php the_field('not_doing_description');?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/banana.jpg" alt="" width="" height=""/>						
				</div>
			
			</div><!--inner content end-->
			
			<div id="image-banner"
    style="background-image:url(<?php the_field('footer_banner_image'); ?>)"></div>


<?php endwhile; ?>




<?php get_footer(); ?>