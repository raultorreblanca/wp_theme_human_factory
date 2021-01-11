<?php while(have_posts()) : the_post(); ?>
    <h1 class="text-center texto-primario"> <?php the_title(); ?> </h1>
        <?php 
            if(has_post_thumbnail()):
                the_post_thumbnail('blog', array('class' => 'imagen-destacada')); 
            else:
                echo "no hay imagen";
            endif;
        ?>

        <?php
            //revisar si custom postype es clases
        if(get_post_type() === 'humanfactory_categorias'){
         ?>
         <p><?php the_field('descripcion');?></p>
        <?php } ?>

    <h1> <?php the_content(); ?> </h1>
<?php endwhile; ?>