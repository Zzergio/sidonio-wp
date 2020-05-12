<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta property="og:image" content="/img/preview.png" />
<?php wp_head(); ?>
  <title><?php echo wp_get_document_title(); ?></title>
</head>
<body>

<!-- HEADER -->

<header class="header">
    <div class="header-wrap">
        <div class="top-header">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-index.svg" alt=""></a>
            <div class="search-menu">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Escribe el nombre de quien buscas" type="text" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"><img src="<?php bloginfo('template_url'); ?>/img/search.svg" alt=""></span>
                    </form>
                </div>
                <nav class="main-menu">
                    <div class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php wp_nav_menu(array(
                      'menu' => 'nav',
                      'menu_class' => 'nav'
                    )); 
                    ?>
                </nav>
            </div>
        </div>
        <div class="slogan animate__animated animate__fadeIn">
            <h1><?php the_field('cf-slogan'); ?></h1>
            <a href="" class="btn-big"><?php the_field('cf-slogan-btn'); ?> <i class="fas fa-chevron-right"></i></a>
        </div>
        <section class="header-person-flex">
        
            <?php
                global $page;
                $mypages = get_pages( array( 
                'meta_key'     => '_wp_page_template', 
                'meta_value'   => 'big.php', 
                'hierarchical' => 0
                ));

            foreach( $mypages as $page ){
                setup_postdata( $page );
            ?>

            <div class="header-person animate__animated animate__fadeIn">
                <div class="header-person-face">
                    <img src="<?php the_field('cf-face-big'); ?>" alt="">
                    <div class="header-person-box">
                        <div class="header-person-item">
                            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="212" height="212" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle-chart__background" stroke="#7B9E17" stroke-width="0.5" fill="#ffffff" cx="16.91549431" cy="16.91549431" r="15.91549431"  />
                            <circle class="circle-chart__circle" stroke="#9F1729" stroke-width="2" stroke-dasharray="<?php the_field('cf-rate-big'); ?>,100" stroke-linecap="butt" fill="none" cx="16.91549431" cy="16.91549431" r="15.2" />
                            </svg>
                            <div class="legend">
                                <p class="legend-digits"><?php the_field('cf-rate-big'); ?>%</p>
                                <p class="legend-desc">Indice de<br>agresividad</p>
                            </div>
                        </div>
                        <p><span class="name-big">&nbsp;&nbsp;<?php the_field('cf-name-big'); ?>&nbsp;&nbsp;</span></p>
                        <p><span class="tag-big"><?php the_field('cf-prof-big'); ?></span></p>  
                    </div>
                </div>
            </div>

            <?php 
                }
                wp_reset_postdata();
            ?>

        </section>
    </div>
</header>