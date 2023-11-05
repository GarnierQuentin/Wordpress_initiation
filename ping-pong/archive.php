<?php

get_header(); 

?>

<main class="revetement_main">

		<?php if ( have_posts() ) : ?>

			<section class="revetement_wrapper">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    $dataRevetements = get_fields();
                    ?>

                    <div class="revetement_wrap"> 

                        <div class="revetement_card">

                            <div class="revetement_top">
                                <div class="revetement_left">
                                    <div class="revetement_picture">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                
                                <div class="revetement_right">
                                    <div class="revetement_content">
                                        <h1> <?php the_title(); ?> </h1>
                                        <p> <?php the_excerpt(); //affiche un bref résumé du post ?> </p>
                                    </div>
                                </div>

                                <div class="revetement_more">
                                    <a href="<?php the_permalink();?>">En savoir +</a>
                                </div>
                            </div>

							<?php
							if ($dataRevetements != null) {
							?>

                            <div class="revetement_bottom">
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
							<?php } ?>
                        </div>
                    </div>

                    <?php
                endwhile; ?>

			</section>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>