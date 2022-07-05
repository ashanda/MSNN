<?php
/*
Template Name: Home
*/
 get_header();  ?>

<div id="home-banner-container">
    <div id="main-slider">
        <ul id="home-slider">
        <?php 
        $image = get_field('banner_image');
        if( !empty( $image ) ): ?>
        <li style="background-image:url(<?php echo esc_url($image['url']); ?>)">
                        <div class="slider-text">
                            <div class="row">
                                <h3><?php the_field('banner_title');?></h3>
                                <hr />
                                <p><?php the_field('banner_description');?></p>
                            </div>
                        </div>
                    </li>
            
        <?php endif; ?>
            
        </ul>
    </div>
</div>
<!--home banner container end-->

<div id="content-wrapper">

    <div id="slider-bottom-blocks" class="page-width">
        <div class="col">
            <h3><?php the_field('bottom_block-1');?></h3>
        </div>
        <div class="col">
            <h3><?php the_field('bottom_block-2');?></h3>
        </div>
        <div class="col">
            <h3><?php the_field('bottom_block-3');?> </h3>
        </div>
    </div>

    <div class="welcome-text">
        <div class="col">
            <h3><?php the_field('wellcome_text_title');?> </h3>
            <?php the_field('wellcome_text_area');?> 
        </div>
        <img id="left-img" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/left-img.png" alt=""
            width="" height="" />
        <img id="right-img" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/right-image.png" alt=""
            width="" height="" />
    </div>

    <div class="home-about-content about-content">
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

                

                <a href="<?php the_field('more_info_button_link');?>" class="button">more about me</a>
            </div>
        </div>
    </div>
</div>
<!--content wrapper end-->


<?php get_footer(); ?>