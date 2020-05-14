<div class="inner-personas-left">
    <p class="sub-title">CATEGORÍAS</p>
    <?php
        $args = array(
            'orderby'            => 'name',
            'order'              => 'ASC',
            'title_li'           => '',
            'current_category'   => 0,
            'hide_empty'         => 0,
            'exclude'            => array( 45 , 44, 1 ),
            'style'              => 'list',
            );
    ?>
    
    <ul>
        <?php wp_list_categories($args); ?>
    </ul>

    <p class="sub-title">ETIQUETAS DE PERSONAS</p>
    <div class="alltags">

    <?php 
        $tags = get_tags( [
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 0,
            ] );
        $active_tag = "active-tag";
        foreach ( $tags as $tag ) {
            if (is_tag($tag->name)) {
                $tag_link = get_tag_link( $tag->term_id );
                $html = "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} ".$active_tag."'>";
                $html .= "{$tag->name}</a>";
                echo $html;    
            }
            else{
            $tag_link = get_tag_link( $tag->term_id );
            $html = "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
            $html .= "{$tag->name}</a>";
            echo $html; 
            }
        } 
    ?>
    
    </div>
</div>