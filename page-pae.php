<?php
/**
* Template Name: Home do PAe - Processo Administrativo Eletrônico
*
* @package CFM
* @subpackage CFM_PAE
*/
?>

<?php get_header(); ?>




<section class="mt-md-5 HeroBanner_e_Acesso_Rapido">
    <div class="container">
      <div class="row">

        <div class="ar_wrapper col-12 display_show_on_sm">
              <h1 class="titulo_acesso_rapido"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_titulo_categorias" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio"></img>Acesso Rápido</h1>
        </div>


        <div class="inicio_hero_banner col-12 col-lg-8  p-0 order-first order-1 order-sm-2 order-lg-1 margin_top_only_on_xs">

                  <div class="slide-wrapper theme-default">

                      <div id="slider" class="nivoSlider">
                        
                      <?php 

                                        $args = array(
                                          'post_type' => 'Banner',
                                          'post_status' => 'publish',
                                          'posts_per_page' => 5,
                                        );
                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :

                                          while ( $arr_posts->have_posts() ) :
                                              $arr_posts->the_post();
                                              ?>
                                                      <?php
                                                                if ( has_post_thumbnail() ) :
                                                                  $imageid = get_post_thumbnail_id( $post->ID );
                                                                  $image_thumb = wp_get_attachment_image_src( $imageid, 'blog-page' );
                                                                  $image_url = wp_get_attachment_url( $imageid );
                                                                endif;
                                                      ?>
                                                      <a href="<?php the_permalink()?>" class="nivo-imageLink" target="_blank"><img src="<?php echo $image_thumb[0]; ?>" title="<?php the_title(); ?>"></a>
                                                

                                               

                                                
                                              <?php
                                          endwhile;
                                        endif;  
                        ?>
                      </div>

              </div>
        </div>
                              

        <div class="inicio_acesso_rapido col-12 col-lg-4 order-sm-1 order-lg-2">


            <div class="row acesso_rapido g-0 ">


            <div class="ar_wrapper col-12 display_none_sm">
              <h1 class="titulo_principal_das_categorias"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_titulo_categorias" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio"></img>Acesso Rápido</h1>
            </div>


            <div class="inicio_dos_itens_do_acesso_rapido menu_acesso_rapido">
                          <?php
                                $args = array(
                                  'menu' => 'principal',
                                  'container' => 'div',
                                  'menu_class' => 'row',
                                  //'container_class'      => 'flex_container',
                                  'theme_location' => 'extra-menu',
                                  //'add_li_class'  => 'd-flex align-items-center justify-content-center py-auto h-100 box_color_and_properties mb-2 mt-2 wrapper_flex_container',
                                  'add_li_class'  => 'col-6 box_color_and_properties p-2',
                                  'items_wrap' => '%3$s',
                                  'depth' => 0,
                                  'walker' => new Custom_Nav_Walker()
                                );

                                wp_nav_menu($args);

                    ?>
            </div>


          



            <!--FIM DAS CAIXAS QUE FICAM EMBAIXO DE ACESSO RÁPIDO-->



          </div>

        </div>



      </div>
    </div>
  </section>
  
    <!--INICIO DA PARTE DE NOTICIAS E COMUNICADOS DO CFM-->
    
  <section class="bg_white mt-5">
          <div class="container">
                <div class="row">

                        <div class="col-12">
                            <h2 class="titulo_principal_das_categorias pb-3 pt-5"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_titulo_categorias" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">Notícias e Comunicados</h2>
                        </div>

                        <div class="mb-3 text-end col-12">
                            <button class="btn btn-dark rounded-pill button_ver_mais"><a class="text-decoration-none" href="http://localhost/augusto/paePHP/wordpress/noticias-2/">VER TODOS</a></button>
                        </div>



                        <?php 
                        
                        
                      

                                      $args = array(
                                        'post_type' => 'Noticias',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 2,
                                      );
                                      $arr_posts = new WP_Query( $args );

                                      if ( $arr_posts->have_posts() ) :

                                        while ( $arr_posts->have_posts() ) :
                                            $arr_posts->the_post();
                                            ?>
                                            <div class="inicio_das_noticias col-12 col-lg-6 pb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                

                                                <div class="fade_img_noticias_black">
                                                <a class="" href="<?php the_permalink() ?>"><?php
                                                          if ( has_post_thumbnail() ) :
                                                              the_post_thumbnail();
                                                          endif;
                                                ?></a>
                                               

                                                     

                                                                          <p class="texto_noticias"><a class="text-decoration-none position_text_into_image" href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
                                                                    


                                                </div> 
                                                
                                              </div>
                                            <?php
                                        endwhile;
                                      endif;



                        
                        
                        
                        
                        ?>

                        <?php
                        
                        
                        
                        $args = array(
                          'post_type' => 'Comunicados',
                          'post_status' => 'publish',
                          'posts_per_page' => 4,
                      );
                      $arr_posts = new WP_Query( $args );
                        
                      if ( $arr_posts->have_posts() ) :
                        
                          while ( $arr_posts->have_posts() ) :
                              $arr_posts->the_post();
                              ?>
                              <div class="inicio_dos_comunicados col-6 col-lg-3  pb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                  

                                  <div class="card rounded-top h-100">
                                        <?php
                                        if ( has_post_thumbnail() ) :
                                            the_post_thumbnail();
                                        endif;
                                        ?>
                                    <!--rounded-top img-fluid--->
                                        <div class="card-body">
                                          <h5 class="text-center pt-4"><a class="text-decoration-none texto_card_comunicados" href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                                        </div>
                                  </div>
                              </div>
                              <?php
                          endwhile;
                      endif;
                        
                        ?>

                    
                    <!--FIM DOS COMUNICADOS-->

                </div>
          </div>
  </section>

   <!--FIM DA PARTE DE NOTICIAS E COMUNICADOS DO CFM-->


   <!--INICIO DA PARTE EM QUE MOSTRA OS NÚMEROS DO CFM-->

   <section class="mt-5">

          <div class="container">

                  <div class="row">

                      <div class="col-12">
                            <h2 class="titulo_principal_das_categorias pb-5"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_titulo_categorias" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">PAe em números</h2>
                      </div>

                      <div class="col-12 pb-4 col-sm-4">
                            <div class="box_dados d-flex">
                                  <div class="container">
                                        <div class="row g-0">

                                              <div class="col-12 text-center">
                                                  <h2 class="texto_box_dados_menor pb-3"><b class="texto_box_dados_maior">+ 90 </b>MILHÕES</h2>
                                                  <p class="texto_paragrafo text-start">Lorem Ipsum Dolor est sit ametus Lorem ipsum dolor</p>
                                              </div>

                                        </div>
                                  </div>
                            </div>
                      </div>


                      <div class="col-12 pb-4 col-sm-4">
                              <div class="box_dados d-flex">
                                <div class="container">
                                      <div class="row g-0">

                                            <div class="col-12 text-center">
                                                  <h2 class="texto_box_dados_menor pb-3"><b class="texto_box_dados_maior">+ 18 </b>BILHÕES</h2>
                                                  <p class="texto_paragrafo text-start">Lorem Ipsum Dolor est sit ametus Lorem ipsum dolor</p>
                                            </div>

                                      </div>
                            </div>
                              </div>
                      </div>


                      <div class="col-12 col-sm-4">
                        <div class="box_dados d-flex">
                                <div class="container">
                                  <div class="row g-0">

                                        <div class="col-12 text-center">
                                            <h2 class="texto_box_dados_menor
                                             pb-3"><b class="texto_box_dados_maior">+ 20 </b>MILHÕES</h2>
                                            <p class="texto_paragrafo text-start">Lorem Ipsum Dolor est sit ametus Lorem ipsum dolor</p>
                                        </div>

                                  </div>
                            </div>
                        </div>
                      </div>


                  </div>


          </div>
    
  </section>

<!--FIM DA PARTE EM QUE MOSTRA OS NÚMEROS DO CFM-->



<!--INICIO DA PARTE DOS MANUAIS DO CFM-->



<section class="bg_white mt-5">


      <div class="container">


              <div class="row">

                    <div class="col-12">
                        <h2 class="titulo_principal_das_categorias pb-5 pt-5"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_titulo_categorias" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">Manuais e Tutoriais</h2>
                    </div>

                    

                    <div class="col-12">

                    <div class="text-end mb-2 col-12">
                      <button class="btn btn-dark rounded-pill button_ver_mais"><a class="text-decoration-none" href="http://localhost/augusto/paePHP/wordpress/manuais-e-tutoriais/">VER TODOS</a></button>
                    </div>

                          <div>
                                  <ul class="list-group list-group-flush">
                                  <?php 

                                              $args = array(
                                                'post_type' => 'Manuais',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 2,
                                              );
                                              $arr_posts = new WP_Query( $args );

                                              if ( $arr_posts->have_posts() ) :

                                                while ( $arr_posts->have_posts() ) :
                                                    $arr_posts->the_post();
                                                    ?>



                                                  

                                                          <li class="list-group-item"><a class="text_manual_central" href="<?php the_permalink(); ?>"><?php the_title() ?></a><p class="text-secondary"><?php the_time( 'd/m/Y' )?> - <?php the_time( 'G:i' ) ?> </p></li>


                           
                                                    <?php
                                                endwhile;
                                              endif;
                                      ?>

                                              <?php 

                                              $args = array(
                                                'post_type' => 'Tutoriais',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 2,
                                              );
                                              $arr_posts = new WP_Query( $args );

                                              if ( $arr_posts->have_posts() ) :

                                                while ( $arr_posts->have_posts() ) :
                                                    $arr_posts->the_post();
                                                    ?>



                                                  

                                                          <li class="list-group-item"><a class="text_manual_central" href="<?php the_permalink(); ?>"><?php the_title() ?></a><p class="text-secondary"><?php the_time( 'd/m/Y' )?> - <?php the_time( 'G:i' ) ?> </p></li>



                                                    <?php
                                                endwhile;
                                              endif;
                                              ?>
                                      
                                  </ul>
                          </div>

                    </div>

              </div>

      </div>


</section>



                                            
<!--FIM DA PARTE DOS MANUAIS DO CFM-->




  <!--INICIO DA PARTE DO FAQ DE PERGUNTAS FREQUENTES-->
  <section class="mt-5">

        <div class="container">


              <div class="row">


                    <div class="col-12">
                        <h2 class="titulo_principal_das_categorias pb-3"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_titulo_categorias" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">Perguntas Frequentes</h2>
                    </div>

                    <div class="mb-3 text-end col-12">
                            <button class="btn btn-dark rounded-pill button_ver_mais"><a class="text-decoration-none" href="http://localhost/augusto/paePHP/wordpress/faq/">VER TODAS</a></button>
                        </div>

                    <div class="col-12">


                            <div class="mb-3">

                                  <div class="accordion accordion-flush" id="accordionFlushExample">

                                            

                                  <?php  

                                              $args = array(
                                                'post_type' => 'FAQ',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 4,
                                              );
                                              $arr_posts = new WP_Query( $args );

                                              if ( $arr_posts->have_posts() ) :

                                                while ( $arr_posts->have_posts() ) :
                                                    $arr_posts->the_post();
                                                    ?>
                                                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                      
                                                    <div class="accordion-item mt-3 box_faq">
                                                        <h2 class="accordion-header" id="flush-heading<?php the_ID(); ?>">
                                                        <button class="accordion-button collapsed bg_green text_white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="flush-collapse<?php the_ID(); ?>">
                                                                <p class="m-0 text_faq"><?php the_title() ?></p>
                                                        </button>
                                                        </h2>


                                                        <div id="flush-collapse<?php the_ID(); ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                          <div class="accordion-body"><?php the_content()?></div>
                                                        </div>

                                                    </div>



                                                </div>
                                                    <?php
                                                endwhile;
                                              endif;

                                              ?>
                                  </div>

                            </div>
                    </div>



              </div>



        </div>


  </section>

  <!--FIM DA PARTE DO FAQ DE PERGUNTAS FREQUENTES-->



 <!--FOOTER ESTAVA AQUI-->

 <?php get_footer(); ?>

</body>

</html>