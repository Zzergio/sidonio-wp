<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:image" content="/img/preview.png" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.png">
  <?php wp_head(); ?>
  <title><?php echo wp_get_document_title(); ?></title>
</head>
<body>

<!-- HEADER -->
<header class="header inner">
    <div class="header-wrap">
        <div class="top-header">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-inner.svg" alt=""></a>
            <div class="search-menu">
                <div class="about-search-top">
                    <form role="search" method="get" class="search-form" action="<?php home_url( '/' ) ?>">
                        <input type="search" id="search-field" class="search-field-top" placeholder="" value="<?php get_search_query() ?>" title="" name="s" />
                        <input id="submit-top" type="submit" class="search-submit" value="" />
                    </form>
                </div>
                <nav class="main-menu nav-inner">
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
    </div>
</header>