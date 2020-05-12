<?php
/*
Template Name: Personas
*/
?>

<?php get_header('index'); ?>

<section class="inner-personas">
    <div class="wrap">
        <div class="section-title">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="inner-personas-flex">
        	<?php get_sidebar(); ?>
        	<div class="inner-personas-right">
                <div class="about-search">
                    <form role="search" method="get" class="search-form" action="">
                    <label><span class="strong">BUSCAR PERSONAS</span>
                    <input type="search" class="search-field" placeholder="p.ej, Piñera" value="" name="s" title="" /></label>
                    <input type="submit" class="search-submit" value="" />
                    </form>
                </div>
                <div class="person-flex">
					
					<?php
			          global $post;
			          $myposts = get_posts( 'numberposts=9&category=41' );
			          foreach( $myposts as $post ){
			            setup_postdata( $post );
			        ?>

                    <div class="person">
                        <div class="person-face">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="person-name">
                            <p><span class="profession">Político</span></p>
                            <p><span class="name">Enriquez-Ominami Marco</span></p>
                        <p><span class="tag">Ex candidato presidencial, PRO País</span></p>
                        </div>
                        <div class="person-aggression">
                            <div class="bar-wrap">
                                <div class="bar" style="width:40%;"></div>
                            </div>
                            <div class="person-digits" style="margin-left: calc( 40% - 13px );"><p>40%</p></div>
                        </div>
                    </div>

					<?php 
				    }
				      wp_reset_postdata();
				    ?>

                </div> <!-- Flex ends -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>