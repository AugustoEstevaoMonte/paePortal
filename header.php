<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PAe processo administrativo eletrônico - CFM conselho federal de medicina">
  <meta name="author" content="CFM conselho federal de medicina">
  <meta name="copyright" content="CFM">
  <meta name="robots" content="index, follow">
  <meta name="rating" content="general">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
  <title><?php bloginfo('name'); ?></title>
</head>

<body>

  <header class="bg_green">

    <!--INICIO DA PARTE DE CIMA COM A LOGO DO CFM-->
    <div class="container pt-4 pb-4">
      <img src="<?php echo get_stylesheet_directory_uri();?>/img/logoCFMmaior.png" alt="Logo do Conselho Federal de Medicina" class="img-fluid">
    </div>
    <!--FIM DA PARTE DE CIMA COM A LOGO DO CFM-->
  </header>

  <!--INICIO DO MENU-->
  <header class="header_2">

    <div>

      <nav class="navbar navbar-expand-lg navbar-dark menu">
        <div class="container-fluid">


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto menu-lista">


            <?php
                  $args = array(
                    'menu' => 'principal',
                    'container' => true,
                    'menu_class' => 'list-unstyled'
                  );
                  wp_nav_menu( $args );

                  // <li class="nav-item">
                //<a class="nav-link" href="#">PAUTA DE JULGAMENTO<div class="setaCima"></div></span></a>
                //</li>
            ?>



            </ul>


          </div>
        </div>
      </nav>

    </div>

  </header>