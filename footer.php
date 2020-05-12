<!-- FOOTER -->

<footer class="footer">
    <div class="wrap">
        <div class="footer-flex">
            <div class="footer-copy">
                <p><?php 
			          $start_year = 2020;
			          $current_year = date('Y');
			            if ($current_year!=$start_year) {
			              echo "Copyright © ".$start_year."- ".$current_year." ";
			              }
			            else {
			              echo "Copyright © ".$start_year." "; 
			              } 
			        ?> #sinodio. Reservados todos los derechos.</p>
            </div>
            <div class="footer-logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-footer.svg" alt=""></a>
            </div>
            <div class="footer-social">
                <p>Difunde</p>
                <a href="https://twitter.com/share?text=#SINODIO&amp;url=http%3A%2F%2Fsinodio.cl%2F" title="Compartir en Twitter"  onclick="owpShareOnClick( this.href );return false;" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fsinodio.cl%2F" title="Compartir en Facebook"  onclick="owpShareOnClick( this.href );return false;" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fsinodio.cl%2F&amp;title=#SINODIO&amp;summary=%23sinodio+es+una+plataforma+creada+para+analizar+y+exponer+el+nivel+de+odio+y+violencia+en+el+lenguaje+de+politicos%2C+comunicadores+sociales%2C+activistas+y+lideres+de+opinion+en+general+provenientes+de+los+diferentes+sectores+de+opinion+de+nuestra+sociedad.+Cumplimos%26hellip%3B&amp;source=http://sinodio.cl/" title="Compartir en LinkedIn"  onclick="owpShareOnClick( this.href );return false;" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--
<script>
    new UISearch( document.getElementById( 'sb-search' ) );
</script>	
-->
</body>
<?php wp_footer(); ?>
</html>