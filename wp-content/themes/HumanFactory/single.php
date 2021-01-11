<?php get_header(); ?>
    <!-- contenedor articulo -->
    <div class="container">
        <div class="row">
            <!-- articulo -->
            <div class="col-12 col-md-9">
                <!-- articulo -->
                <!-- have_posts: Determina si la consulta actual de WordPress tiene publicaciones para recorrer. -->
                <!-- while(por cada post) have_posts: Si hay Post en la base de wordpress -->
                <!-- the_post: muestra un post de los recorridos -->
                <?php if(have_posts()): while(have_posts()): the_post();?>
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));}  ?>
                <h2 class="my-3"><?php the_title(); ?></h2>
                <p class="lead"><?php the_category(', '); ?></p>
                <div class="text-justify my-5">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <!-- fin articulo -->
            <!-- aside -->
            <div class="col-12 col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <!-- fin aside -->
        </div>
    </div>
    <!-- fin contenedor articulo -->
    <?php get_footer(); ?>