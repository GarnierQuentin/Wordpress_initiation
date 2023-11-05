<?php

get_header(); 

?>

<main class="bois_main">

		<?php if ( have_posts() ) : ?>

			<section class="bois_wrapper">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    ?>

                    <div class="bois_wrap"> 

                        <div class="bois_card">

                            <div class="bois_left">
                                <div class="bois_picture">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            
                            <div class="bois_right">
                                <div class="bois_content">
                                    <h1> <?php the_title(); ?> </h1>
                                    <p> <?php the_excerpt(); //affiche un bref résumé du post ?> </p>
                                </div>
                            </div>

                        </div>



                        <div>

                            <div class="bois_more">
                                <a href="<?php the_permalink();?>">En savoir +</a>
                            </div>

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