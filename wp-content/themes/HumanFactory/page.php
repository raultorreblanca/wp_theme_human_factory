<?php get_header(); ?>

    <div class="container my-5">
        <!-- articulo -->
        <!-- have_posts: Determina si la consulta actual de WordPress tiene publicaciones para recorrer. -->
        <!-- while(por cada post) have_posts: Si hay Post en la base de wordpress -->
        <!-- the_post: muestra un post de los recorridos -->
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <h2><?php the_title(); ?></h2>
        <div class="text-justify"> 
        <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
    
<?php get_footer(); ?>