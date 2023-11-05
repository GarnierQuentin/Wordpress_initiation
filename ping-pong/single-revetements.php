<?php

get_header(); 
?>

<main class="single_revetements">

    <div class="single_revetements_post">

        <div class="left_revetements_post">
            
            <div class="single_revetements_infos">
                <div class="single_revetements_title">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>

            <div class="single_revetements_img">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        $dataRevetements = get_fields();
                        the_post_thumbnail();
                    endwhile;
                endif;
                ?>
            </div>

        </div>

        <div class="right_revetements_post">

            <div class="single_revetements_content">
                <?php the_content(); ?>
            </div>
        
            <section class="revetement_infos">
                <h2>Informations sur le revêtement :</h2>

                <div class="revetement_details">
                    <p>Rapidité : <?php echo $dataRevetements['rapidite'] ?> </p>
                    <p>Contrôle : <?php echo $dataRevetements['controle'] ?> </p>
                    <p>Adhérence : <?php echo $dataRevetements['adherence'] ?> </p>
                    <p>Epaisseur : <?php echo $dataRevetements['epaisseur'] ?> </p>
                </div>
            </section>
        </div>

    </div>

</main>

<?php get_footer(); ?>