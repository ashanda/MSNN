<?php
get_header();  
get_template_part( 'template-parts/inner', 'banner' );?> 
<?php while ( have_posts() ) : the_post(); ?>
<div id="inner-content">
				<div class="text-content">
					<h1><?php the_content();?></h1>
					<hr/>
					<p>This programme is for you if you are sick of dieting but want to lose weight. Here we will address your understanding 
					of food and diet, explore your mindset to health, build healthy habits, identify coping strategies, understand how to eat 
					intuitively, learn to trust yourself, discover the importance of movement, sleep and how to manage stress and more.</p>						
				</div>
			
				<div class="content-blocks"> 
					<img class="deco"  src="<?php echo get_template_directory_uri(); ?>/inc_files/images/deco2.png" alt="" width="" height=""/>	
					<div class="row">
						<h3>1 HOUR CONSULTATION - <span>£60</span></h3>
						<hr/>
						<div class="col left-align">
							<p>This programme is for you have a healthy relationship with food but need support and guidance to enable you to lose weight
							and keep it off. If you need support and coaching to develop coping mechanisms relating to overeating or you need to overcome 
							disordered eating patterns then Programme 2 is recommended (see below).</p>
							
							<p>Together we will identify your goals in each session to improve your nutrition and  implement strategies to help build healthy habits unique to you. </p>
							
							<p>For optimal success it is recommended to have weekly consultations for the first month and reduce to every two weeks in subsequent months.</p>
						</div>
						<div class="col right-align">
							<ul>
								<li>Initial consultation (60 mins)</li>
								<li>5 follow-up consultations (45 mins)</li>
								<li>Food diary analysis </li>
								<li>Email and WhatsApp support throughout</li>
								<li>Written review of each session with recommendations to form your personal Nutrition and Wellbeing Programme</li>
								<li>Range of useful resources</li>
							</ul>
						</div>
					</div>
					<a href="#" class="button">book now</a>
				</div><!--content blocks end-->
				
				<div class="content-blocks"> 
					<img class="deco"  src="<?php echo get_template_directory_uri(); ?>/inc_files/images/deco2.png" alt="" width="" height=""/>	
					<div class="row">
						<h3>Programme 2 - <span>£540</span></h3> 
						<hr/>
						<div class="col left-align">
							<p>This programme is for you have a healthy relationship with food but need support and guidance to enable you to lose weight
							and keep it off. If you need support and coaching to develop coping mechanisms relating to overeating or you need to overcome 
							disordered eating patterns then Programme 2 is recommended (see below).</p>
							
							<p>Together we will identify your goals in each session to improve your nutrition and  implement strategies to help build healthy habits unique to you. </p>
							
							<p>For optimal success it is recommended to have weekly consultations for the first month and reduce to every two weeks in subsequent months.</p>
						</div>
						<div class="col right-align">
							<ul>
								<li>Initial consultation (60 mins)</li>
								<li>5 follow-up consultations (45 mins)</li>
								<li>Food diary analysis </li>
								<li>Email and WhatsApp support throughout</li>
								<li>Written review of each session with recommendations to form your personal Nutrition and Wellbeing Programme</li>
								<li>Range of useful resources</li>
							</ul>
						</div>
					</div>
					<a href="#" class="button">book now</a>
				</div><!--content blocks end-->
				
				<div class="banana-text"> 
					<h4>NOT DONG THIS ALONE?</h4>
					<p>All programmes can be booked as a couples or family programme. Often, working together as a family results in greater
					individual success. Price will need to be discussed depending on the number of people and requirements so please ask 
					if you would like to know more.</p>
					<img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/banana.jpg" alt="" width="" height=""/>						
				</div>
			
			</div><!--inner content end-->
			
			<div id="image-banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc_files/images/inner-banner2.jpg)"></div>    

<?php endwhile; ?>




<?php get_footer(); ?>