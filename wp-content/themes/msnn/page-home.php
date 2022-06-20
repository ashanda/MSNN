<?php
/*
Template Name: Home
*/
 get_header();  ?>

<div id="home-banner-container">
    <div id="main-slider">
        <ul id="home-slider">
            <li
                style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc_files/images/main-banner.jpg)">
                <div class="slider-text">
                    <div class="row">
                        <h3>Nutrition consultant in Suffolk</h3>
                        <hr />
                        <p>providing personalised nutrition and lifestyle programmes for those wishing to optimise their
                            overall health</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--home banner container end-->

<div id="content-wrapper">

    <div id="slider-bottom-blocks" class="page-width">
        <div class="col">
            <h3>know how to be healthier, but never seem to achieve what you hoped for?</h3>
        </div>
        <div class="col">
            <h3>sick of dieting, restricting your food choices at home and when dining out?</h3>
        </div>
        <div class="col">
            <h3>want to enjoy your food and break the relentless cycle of dieting? </h3>
        </div>
    </div>

    <div class="welcome-text">
        <div class="col">
            <h3>If so then welcome, you are in the right place.</h3>
            <p>Here you will be fully supported to learn how
                to form a healthy relationship with food, free from guilt and self-punishment. This will free you
                from relentless dieting and allow you to <strong>enjoy food again.</strong></p>

            <p>Diets fail because they are unachievable and unrealistic, they create food cravings, binge behaviours,
                and
                a sense of failure. However, its not you its them, <strong>diets are not the answer</strong> and there
                is another way. This
                isn’t a quick fix; you won’t have to cut out all the foods you love and fixated on food. This is a
                positive
                change to how you feel about and relate to food, health and you.</p>

            <p>Together we will develop your psychologic and physical understanding of food and your relationship with
                it.
                We will implement <strong>manageable changes</strong> step by step to allow you to adjust and embrace
                them meaning they
                stay with you into the future.</p>

            <p>Each person is unique and so are their needs; therefore, each plan is designed specifically to
                <strong>your
                    individual needs.</strong> We will take time to understand your requirements, likes and dislike and
                aims to
                provide you with the best plan and support.</p>
        </div>
        <img id="left-img" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/left-img.png" alt=""
            width="" height="" />
        <img id="right-img" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/right-image.png" alt=""
            width="" height="" />
    </div>

    <div class="home-about-content about-content">
        <div class="page-width">
            <div class="about-img">
                <img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/owner.png" alt="" width=""
                    height="" />
            </div>
            <div class="col">
                <h1>Hi! I’m Melanie</h1>
                <h2>melanie stride-noble, BSc, ANutr</h2>
                <hr />
                <p>I am an Associate Registered Nutritionist offering support in weight management, nutritional
                    counselling and gut health.</p>

                <p>My approached is based on gentle talking therapy and a non-diet approach, focusing on behaviour
                    change and your personal
                    feeling of self-development rather than weight as a marker of health, once we change our
                    relationship with food weight
                    loss follows.</p>

                <a href="#" class="button">more about me</a>
            </div>
        </div>
    </div>
</div>
<!--content wrapper end-->


<?php get_footer(); ?>