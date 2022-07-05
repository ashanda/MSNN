<?php
/*
Template Name: About Us
*/
 get_header();  
 get_template_part( 'template-parts/inner', 'banner' );?>



<div class="about-content">
<div class="page-width">
            <div class="about-img">
                <img src="<?php the_field('about_me_profile_image');?>" alt="" width=""
                    height="" />
            </div>
            <div class="col">
                <h1><?php the_field('about_me_title');?></h1>
                <h2><?php the_field('about_me_sub_title');?></h2>
                <hr />
                <?php the_field('about_me_description');?>
            </div>
        </div>
</div>

<div id="inner-content">
    <div class="about-text-content">
        <?php the_field('description');?>

        <h3><?php the_field('inner_content_title');?></h3>
        <p><?php the_field('inner_content_description');?></p>

        <h4><?php the_field('inner_content_sub_title');?></h4>
        <?php if( have_rows('qualifications') ): ?>
            <ul>
            <?php while( have_rows('qualifications') ): the_row();?>
                <li>
                    <?php the_sub_field('item'); ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        
        <a href="<?php the_field('service_button_link'); ?>" class="button">MY SERVICES</a>
    </div>
</div>
<!--inner content end-->

<div id="image-banner"
    style="background-image:url(<?php the_field('footer_banner_image'); ?>)"></div>


<?php get_footer(); ?>