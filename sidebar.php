<div class="inner-personas-left">
    <p class="sub-title">CATEGORÍAS</p>
    <ul>
    <?php
        $categories = get_categories(array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 0,
            'exclude' => array( 45 , 44, 1 ),
            ));
        foreach( $categories as $category ){
            echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
        }
    ?>
    </ul>
    <p class="sub-title">ETIQUETAS DE PERSONAS</p>
    <div class="alltags">
        <?php wp_tag_cloud('orderby=name&smallest=10.5&largest=10.5'); ?>
    </div>
</div>