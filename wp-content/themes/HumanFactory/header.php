<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>style.css">
    <style>
    .suscribir{

            background: rgb(8, 10, 9);
            background: linear-gradient(180deg, rgb(13, 14, 13) 0%, rgb(160, 170, 164) 100%);
            background-size: cover;
            background-position: center;
            position: center;
            opacity: 0.5;
            height:400px;

            }
    .imagenFondoCabecera{
            width:600px;
            height:400px;
            }
    </style>
    <title>Hello, world!</title>
    <?php the_header(); ?>
  </head>
  <body>
    <!--NAVBAR-->
    <div class="container-fluid container fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
          <a class="navbar-brand" href="#">
            <img src="images/HumanFactory_logo_TRAZADO-01.png" width="60" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            For The Mases
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <!-- inicio menu, muestra un menú segón los parametros especificados y obedece a su ubicación gracias a 'theme_location' -->
    <!-- https://developer.wordpress.org/reference/functions/wp_nav_menu/ -->
        <?php wp_nav_menu(array(
            'theme_location' => 'superior',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s',
            'menu_class' => 'nav_item',
        )); ?>
    <!-- fin menu -->
        </nav>
    </div>
    <!-- Suscripción -->
    <div class = "container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
      <div class = "text-center text-white">
        <h1 class="display-4">HUMAN FACTORY</h1>
      </div>
    </div>
    <!-- fin Suscripción -->    