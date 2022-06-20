<?php
/*
Template Name: Other
*/
get_header();  
get_template_part( 'template-parts/inner', 'banner' );?>
<div id="inner-content">
				<div class="text-content">
					<h1>BESPOKE NUTRITION CONSULTATIONS</h1>
					<hr/>
					<p>If none of the packages suit you then you can book an individual one to one session. </p>	
				</div>
				<div class="content-blocks"> 
					<img class="deco" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/deco2.png" alt="" width="" height=""/>
					<div class="row">
						<h3>1 HOUR CONSULTATION - £60</h3>
						<hr/>
						<div class="col left-align"> 						
							<p>We can discuss your requirements in the discovery call and advise if this option will be suitable for your goals.</p> 
						</div>
						<div class="col right-align"> 	
							<ul>
								<li>Consultation (min 60 mins)</li>
								<li>Written review of each session with recommendations to form your personal Nutrition and Wellbeing Programme</li>
								<li>Advice and resources</li> 
							</ul>						
						</div>
					</div>
					<a href="#" class="button">book now</a>
				</div>
				<div class="banana-text"> 
					<h4>NOT DONG THIS ALONE?</h4>
					<p>All programmes can be booked as a couples or family programme. Often, working together as a family results in greater
					individual success. Price will need to be discussed depending on the number of people and requirements so please ask 
					if you would like to know more.</p>
					<img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/banana.jpg" alt="" width="" height=""/>						
				</div>
			</div><!--inner content end-->
			
			<div id="image-banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc_files/images/inner-banner2.jpg)"></div>



<?php get_footer(); ?>