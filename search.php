<?php 
/**
 * Template Name: Search Page
 */
?> 

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
                    <h2>Resultados de búsqueda</h2>
                </div>
			
<?php
	$s=get_search_query( $escaped = true );
	$args = array( 's' =>$s );

// The Query

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
?>

	<div class="search-results">
       	<p>Resultados de búsqueda para: <span class="search-word">"<?php the_search_query() ?>"</span></p>
    </div>
    <div class="person-flex archive">

<?php
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
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
    }else{
?>
	<div class="search-results">
       	<p><span class="search-word">Nada encontrado (</span></p>
       	<p>Lo sentimos, pero nada coincide con sus criterios de búsqueda. Intente nuevamente con algunas palabras clave diferentes.</p>
    </div>
    <div class="person-flex">
          
    </div>
<?php } ?>

                </div> <!-- Flex ends -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>