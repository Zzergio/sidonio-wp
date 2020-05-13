<?php get_header('index'); ?>

<!-- ABOUT SECTION -->

<section class="about">
    <div class="wrap">
        <div class="about-flex">
            <div class="about-text">
                <?php the_content(); ?>
            </div>
            <div class="about-search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>

<!-- TOP PERSON BLOCK -->

<section class="top-person-section">
    <div class="wrap">
        <div class="section-title">
            <h2><?php the_field('cf-top-title'); ?></h2>
            <a href="" class="btn-small">Todos las personas</a>
        </div>
        <div class="top-person-flex">
            
            <?php
                global $post;
                $myposts = get_posts( 'numberposts=3&category=45&order=ASC' );
                foreach( $myposts as $post ){
                setup_postdata( $post );
            ?>

            <div class="top-person">
                <div class="top-person-face">
                    <?php the_post_thumbnail(); ?>
                    <div class="item-top">
                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="212" height="212" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle-chart__background" stroke="#7B9E17" stroke-width="0.5" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431"  />
                            <circle class="circle-chart__circle" stroke="#9F1729" stroke-width="2" stroke-dasharray="<?php the_field('cf-rate'); ?>,100" stroke-linecap="butt" fill="none" cx="16.91549431" cy="16.91549431" r="15.2" />
                        </svg>
                    </div>
                    <div class="top-place">
                        <img src="<?php bloginfo('template_url'); ?>/img/<?php the_field('cf-number'); ?>.svg" alt="">
                    </div>
                    <div class="top-person-digits">
                        <p><?php the_field('cf-rate'); ?></p>
                    </div>
                </div>
                <div class="person-name">
                    <p><span class="profession"><?php 
                $category = get_the_category(); 
                echo $category[0]->cat_name; ?></span></p>
                    <p><span class="name"><?php the_title(); ?></span></p>
                    <p><?php 
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo "<span class='tag'>" . $tag->name . "</span>" ; }
                    }
                ?></span></p>
                </div>
            </div>

            <?php 
                }
                wp_reset_postdata();
            ?>

        </div> <!-- Flex ends -->
    </div> <!-- Wrap ends -->
</section>

<!-- TAGS SECTION -->

<section class="tag-box-section">
    <div class="wrap">
    <div class="section-title">
        <h2>ETIQUETAS DE PERSONAS</h2>
    </div>
        <div class="alltags">
            <?php wp_tag_cloud('orderby=name&smallest=10.5&largest=10.5'); ?>
        </div>
    </div>
</section>

<!-- COMMON PERSON BLOCK -->

<section class="person-section">
<div class="wrap">
    <div class="section-title">
        <h3>Reposición</h3>
    </div>
    <div class="person-flex">
        
        <?php
            global $post;
            $myposts = get_posts( 'numberposts=12' );
            foreach( $myposts as $post ){
            setup_postdata( $post );
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

            <?php 
                }
                wp_reset_postdata();
            ?>

    </div> <!-- Flex ends -->
</div> <!-- Wrap ends -->
</section>

<?php get_footer(); ?>