<?php get_header(); ?>

<?php  while ( have_posts() ) : the_post(); ?>

<section class="inner-personas">
    <div class="wrap">
        <div class="section-title">  
  			<h2><?php the_title(); ?></h2>
  		</div>
        <div class="inner-form">
  			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>