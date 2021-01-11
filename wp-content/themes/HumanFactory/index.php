<!-- get_header: automaticamente wordpress buscará la página header.php para mostrar -->
<?php get_header(); ?>
    <!-- CONTENIDO -->
    <div class="container my-5">
      <div class="row">
        <!-- articulo -->
        <!-- have_posts: Determina si la consulta actual de WordPress tiene publicaciones para recorrer. -->
        <!-- while(por cada post) have_posts: Si hay Post en la base de wordpress -->
        <!-- the_post: muestra un post de los recorridos -->
      <?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="card col-12 col-sm-6 col-md-4 mb-3 my-5" style="width: 18rem;">

            <!--<img src="images/HumanFactory_logo_FONDO.jpg" class="card-img-top img-fluid" alt="card image cap"> -->
            <a href="<?php the_permalink(); ?>"> <?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid'));}  ?></a>
            <div class="card-body">
              <!-- the_permalink: genera un link -->
              <!-- the_title: muestra el titulo de la entrada -->
              <!-- the_exerpt: muestra el contenido de la entrada -->
              <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="card-footer">
              <!-- get_the_date: retorna la fecha actual -->
              <!-- the_category: retorna la categoria en la cual fue creada la entrada -->
              <!-- the_author: retorna el autor de la entrada -->
              <small class="text-muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?></small>
            </div>
          </div>
      <?php endwhile; endif; ?>
      </div>
      <!--fin articulo-->
    </div>
    <!--fin contenido-->
<!-- get_footer: automaticamente wordpress buscará la página footer.php para mostrar -->
<?php get_footer(); ?>