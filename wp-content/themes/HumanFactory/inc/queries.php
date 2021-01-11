<?php
    function HumanFactory_lista_categorias(){      
?>
    <ul class="lista-categorias">
    <?php
        $args = array(
            'post_type' => 'humanfactory_categorias',
            'post_per_page' => 10
        );
        $clases = new WP_Query($args);
        while($clases->have_posts()): $clases->the_post();
    ?>
    <li class="clase card gradient">
        <?php the_post_thumbnail('mediano'); ?>
        <div class="contenido">
                <h3><?php the_title(); ?></h3>

            <p><?php the_field('descripcion');?></p>
            <a href="<?php the_permalink(); ?>">
                <h3>Descubre lo nuevo</h3>
            </a>
        </div>
    </li>
        
    <?php endwhile; wp_reset_postdata();?>
    </ul>
<?php
    }
?>

