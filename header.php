
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="CFM conselho federal de medicina">
  <meta name="copyright" content="CFM">
  <meta name="robots" content="index, follow">
  <meta name="rating" content="general">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <title><?php bloginfo('name'); ?></title>
</head>

<body>

  <header class="bg_green">

    <!--INICIO DA PARTE DE CIMA COM A LOGO DO CFM-->
    <div class="container pt-4 pb-4">
      <a href="/augusto/paePHP/wordpress/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoCFMmaior.png" alt="Logo do Conselho Federal de Medicina" class="img-fluid"></a>
    </div>
    <!--FIM DA PARTE DE CIMA COM A LOGO DO CFM-->
  </header>

  <!--INICIO DO MENU-->
  <nav id="nav">

  <header class="header_2">




    <div class="container-fluid menu_wrapper">
        <button id="btn_mobile">
          <span id="hamburguer"></span>
        </button>
      <?php
      $args = array(
        'menu' => 'principal',
        'container' => true,
        'menu_class' => 'menu_principal'
      );
      wp_nav_menu($args);

      // <li class="nav-item">
      //<a class="nav-link" href="#">PAUTA DE JULGAMENTO<div class="setaCima"></div></span></a>
      //</li>



      
      ?>



    </div>


    </div>

  </header>
</nav>