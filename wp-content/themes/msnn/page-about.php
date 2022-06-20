<?php
/*
Template Name: About Us
*/
 get_header();  
 get_template_part( 'template-parts/inner', 'banner' );?>



<div class="about-content">
    <div class="page-width">
        <div class="about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/owner.png" alt="" width=""
                height="" />
        </div>
        <div class="col">
            <h1>Hi! I’m Melanie</h1>
            <h2>melanie stride-noble, BSc, ANutr</h2>
            <hr />
            <p>I am an <strong>Associate Registered Nutritionist</strong> offering support in weight management,
                nutritional
                counselling and gut health.</p>

            <p>My approached is based on gentle talking therapy and a non-diet approach, focusing on <strong>behaviour
                    change</strong>
                and your personalfeeling of<strong> self-development</strong> rather than weight as a marker of health,
                once we
                change our relationship with food <strong>weight loss</strong> follows.</p>
        </div>
    </div>
</div>

<div id="inner-content">
    <div class="about-text-content">
        <p>I specialise in <strong>weight management</strong> as I know what it is like to have disordered eating and
            struggle with guilt associated eating.
            My experience has allowed me to be able to provide you with the best support and advice to food freedom and
            <strong>achieve your goals.</strong></p>

        <p>When I am not working with my wonderful private clients I work with children who have challenging
            relationships with food.
            I help them develop an understand their behaviours and improve their knowledge of nutrition. Tackling
            destructive behaviours
            allows them to enjoy a childhood free from guilt and self-doubt. I also research scientific nutrition
            publications to write
            evidence based articles on nutrition and nutritional psychology. </p>

        <h3>You’re in safe hands</h3>
        <p>Unfortunately, the title of "Nutritionist" isn't protected in the UK so to know you are working with someone
            who is appropriately
            qualified look out for Registered Nutritionists (RNutr) or Associate Registered Nutritionists (ANutr). Check
            the Association for
            Nutrition (AfN) website for registration details.</p>

        <h4>My qualifications</h4>
        <ul>
            <li>Nutrition and Human Health BSc (first) University of Suffolk (AfN Accredited)</li>
            <li>Navigating Emotional Eating In Clinic </li>
            <li>Plant-based Diets in the Prevention, Treatment, and Remission of Type 2 Diabetes, Bowel Cancer,
                Diet, and the Gut Microbiome; Webinar CPD</li>
            <li>Counselling Skills CPCAB</li>
            <li>Plus, further courses and training in nutrition, yoga and mindfulness</li>
        </ul>
        <a href="#" class="button">MY SERVICES</a>
    </div>
</div>
<!--inner content end-->

<div id="image-banner"
    style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc_files/images/inner-banner2.jpg)"></div>


<?php get_footer(); ?>