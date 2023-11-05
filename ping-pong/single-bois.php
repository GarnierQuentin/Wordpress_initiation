<?php

get_header(); 
?>

<main class="single_bois">

    <div class="single_bois_post">

        <div class="top_bois_post">
            
            <div class="single_bois_img">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        the_post_thumbnail();
                    endwhile;
                endif;
                ?>
            </div>

            <div class="single_bois_infos">
                <div class="single_bois_title">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>

        </div>

        <div class="bottom_bois_post">

            <div class="single_bois_content">
                <?php the_content(); ?>
            </div>
        
        </div>

    </div>

</main>

<?php get_footer(); ?>