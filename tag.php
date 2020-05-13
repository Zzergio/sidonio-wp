<?php get_header(); ?>

<section class="inner-personas">
    <div class="wrap">
        
        <div class="inner-personas-flex">
        	<?php get_sidebar(); ?>
        	<div class="inner-personas-right" style="width: 100%;">
                <div class="about-search">
                    <?php get_search_form(); ?>
                </div>
                <div class="section-title">
                    <h2><?php single_cat_title(); ?></h2>
                </div>

                <div class="person-flex">
					
				<?php if ( have_posts() ) : 
                    while ( have_posts() ) :
                        the_post();
                ?>

            <div class="person">
            <div class="person-face">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="person-name">
                <p><span class="profession"><?php 
                $category = get_the_category(); 
                echo $category[0]->cat_name; ?></span></p>
                <p><span class="name"><?php the_title(); ?></span></p>
            <p><span class="tag">
                <?php 
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo "<span class='tag'>" . $tag->name . "</span>" ; }
                    }
                ?></span></p>
            </div>
            <div class="person-aggression">
                <div class="bar-wrap">
                    <div class="bar" style="width:<?php the_field('cf-rate'); ?>%;"></div>
                </div>
                <div class="person-digits" style="margin-left: calc( <?php the_field('cf-rate'); ?>% - 13px );"><p><?php the_field('cf-rate'); ?>%</p></div>
            </div>
        </div>


                <?php endwhile;
                    else : ?>
                    <div class="search-results">
                        <p><span class="search-word">Nada encontrado (</span></p>
                        <p>Esta categoria esta vacia</p>
                    </div>
                <?php
                endif;
                ?>

                </div> <!-- Flex ends -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>