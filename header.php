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

<header class="header inner">
    <div class="header-wrap">
        <div class="top-header">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-inner.svg" alt=""></a>
            <div class="search-menu">
                <div id="sb-search" class="sb-search sb-search-inner">
                    <form>
                        <input class="sb-search-input" placeholder="Escribe el nombre de quien buscas" type="text" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"><img src="<?php bloginfo('template_url'); ?>/img/search-inner.svg" alt=""></span>
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