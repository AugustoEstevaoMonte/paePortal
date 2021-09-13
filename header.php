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
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/lib/nivo-slider/themes/default/default.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/lib/nivo-slider/nivo-slider.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <?php
  if (isset($args['titulo']) && !empty($args['titulo'])) {
    $titulo = $args['titulo'];
  } else {
    $titulo = get_bloginfo('name');
  }
  ?>
  <title><?php echo $titulo; ?></title>
</head>

<body>

  <header class="bg_green logoCFM">

    <!--INICIO DA PARTE DE CIMA COM A LOGO DO CFM-->
    <div class="container-fluid container-lg pt-4 pb-4">
        <a href="/augusto/paePHP/wordpress/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoCFMmaior.png" alt="Logo do Conselho Federal de Medicina" class="img-fluid logoPrincipalCFM"></a>
    </div>
    <!--FIM DA PARTE DE CIMA COM A LOGO DO CFM-->
  </header>

  <!--INICIO DO MENU-->
    <header class="headerMenuPrincipal shadow">

    <nav class="navbar navbar-expand-lg navbar-dark menu_wrapper">
        <div class="container">
              
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse inicio_do_menu_principal" id="navbarNavDropdown">
                                  <?php
                                      $args = array(
                                        'menu' => 'principal',
                                        'container' => true,
                                        'menu_class' => 'navbar-nav menu_principal_teste',
                                        'theme_location' => 'header-menu',
                                        'depth'             => 2,
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                      );
                                      wp_nav_menu($args);
                                 ?>
                    </div>
        </div>
    </nav>

    </header>