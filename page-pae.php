<?php
// Template Name: Home do PAe - Processo Administrativo Eletrônico
?>

<?php get_header(); ?>




<section class="mt-5">
    <div class="container">
      <div class="row">

        <!--INICIO DO HERO-->
        <div class="col-md-8 col-12 p-0">
            <div class="img_section">
                  <div class="row g-0">

                         <div class="container">

                              <div class="col-12">
                                <h1 class="hero_title title_margin">Conheça o PAe<br><b>Processo Administrativo Eletrônico</b></h1>
                                
                              </div>

                              <div class="col-lg-5 col-sm-8">
                                <button class="btn btn_saiba">Saiba Mais</button>
                              </div>

                         </div>
                  </div>

            </div>
        </div>
        <!--FIM DO HERO-->

        <div class="col-sm-12 col-md-4">


          <div class="row acesso_rapido g-0">

            <!--INICIO DO TITULO ACESSO RÁPIDO-->
            <div class="ar_wrapper col-12">
              <h1 class="titulo"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_tit" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio"></img>Acesso Rápido</h1>
            </div>
            <!--FIM DO TITULO ACESSO RÁPIDO-->



            <!--INICIO DAS CAIXAS QUE FICAM EMBAIXO DE ACESSO RÁPIDO-->


            <div class="ar_wrapper col-6">
              <div class="box_acesso d-flex align-items-center justify-content-center py-auto h-100">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/pae.svg" alt="" class="icon-box p-1">
                <h2 class="titulo_icon"><a href="">Acesse o PAe</a></h2>
              </div>
            </div>


            <div class="ar_wrapper col-6">
              <div class="box_acesso d-flex align-items-center justify-content-center py-auto h-100">
                <h2 class="titulo_icon"><img src="<?php echo get_stylesheet_directory_uri();?>/img/perguntas.svg" alt="" class="icon-box p-1"><a href="#">Perguntas Frequentes</a></h2>
              </div>
            </div>


            <div class="ar_wrapper col-6">
              <div class="box_acesso d-flex align-items-center justify-content-center py-auto h-100">
                <h2 class="titulo_icon"><img src="<?php echo get_stylesheet_directory_uri();?>/img/tutoriais.svg" alt="" class="icon-box p-1"><a href="#">Tutoriais e Manuais</a></h2>
              </div>
            </div>


            <div class="ar_wrapper col-6">
              <div class="box_acesso d-flex align-items-center justify-content-center py-auto h-100">
                <h2 class="titulo_icon"><img src="<?php echo get_stylesheet_directory_uri();?>/img/pesquisa.svg" alt="" class="icon-box p-1"><a href="#">Pesquisa Processual</a></h2>
              </div>
            </div>


            <div class="ar_wrapper col-6">
              <div class="box_acesso d-flex align-items-center justify-content-center py-auto h-100">
                <h2 class="titulo_icon"><img src="<?php echo get_stylesheet_directory_uri();?>/img/problemas.svg" alt="" class="icon-box p-1"><a href="#">Problemas Técnicos</a></h2>
              </div>
            </div>


            <div class="ar_wrapper col-6">
              <div class="box_acesso d-flex align-items-center justify-content-center py-auto h-100">
                <h2 class="titulo_icon"><img src="<?php echo get_stylesheet_directory_uri();?>/img/contato.svg" alt="" class="icon-box p-1"><a href="#">Entre em Contato</a></h2>
              </div>
            </div>


            <div class="ar_wrapper col-12 p-0 pt-2 pb-2">
                <div class="box-maior d-flex align-items-center justify-content-center py-auto h-100">
                  <h2 class="titulo_icon"><img src="<?php echo get_stylesheet_directory_uri();?>/img/calendario.svg" alt="" class="icon-box p-1"><a href="#">Calendário de Indisponibilidade</a></h2>
                </div>
            </div>

            <!--FIM DAS CAIXAS QUE FICAM EMBAIXO DE ACESSO RÁPIDO-->



          </div>

        </div>



      </div>
    </div>
  </section>
  
    <!--INICIO DA PARTE DE NOTICIAS E COMUNICADOS DO CFM-->
    
  <article class="bg_white mt-5">
          <div class="container">
                <div class="row">

                        <div class="col-12">
                            <h2 class="titulo pb-5 pt-5"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_tit" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">Notícias e Comunicados</h2>
                        </div>



                        <!--INICIO DAS NOTICÍAS-->

                        <?php 
                        
                        
                      

                                      $args = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'category_name' => 'noticias',
                                        'posts_per_page' => 2,
                                      );
                                      $arr_posts = new WP_Query( $args );

                                      if ( $arr_posts->have_posts() ) :

                                        while ( $arr_posts->have_posts() ) :
                                            $arr_posts->the_post();
                                            ?>
                                            <div class="col-12 col-lg-6 pb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                               
                                            <!-- -->
                                                

                                                <div class="fade_test">
                                                <a class="" href="<?php the_permalink() ?>"><?php
                                                          if ( has_post_thumbnail() ) :
                                                              the_post_thumbnail();
                                                          endif;
                                                ?></a>
                                               

                                                     

                                                                          <p class="text_not "><a class="text-decoration-none title_test" href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
                                                                    


                                                </div> 
                                                
                                              </div>
                                            <?php
                                        endwhile;
                                      endif;



                        
                        
                        
                        
                        ?>

                      
                       
  
                        <!--FIM  DAS NOTÍCIAS-->


                        <!--INICIO DOS COMUNICADOS-->
                        

                        <?php
                        
                        
                        
                        $args = array(
                          'post_type' => 'post',
                          'post_status' => 'publish',
                          'category_name' => 'comunicados',
                          'posts_per_page' => 4,
                      );
                      $arr_posts = new WP_Query( $args );
                        
                      if ( $arr_posts->have_posts() ) :
                        
                          while ( $arr_posts->have_posts() ) :
                              $arr_posts->the_post();
                              ?>
                              <div class="col-md-3  pb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                  

                                  <div class="card rounded-top">
                                        <?php
                                        if ( has_post_thumbnail() ) :
                                            the_post_thumbnail();
                                        endif;
                                        ?>
                                    <!--rounded-top img-fluid--->
                                        <div class="card-body">
                                          <h5 class="text-center pt-4"><a class="text-decoration-none text_comunicados" href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
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
  </article>

   <!--FIM DA PARTE DE NOTICIAS E COMUNICADOS DO CFM-->


   <!--INICIO DA PARTE EM QUE MOSTRA OS NÚMEROS DO CFM-->

   <section class="mt-5">

          <div class="container">

                  <div class="row">

                      <div class="col-12">
                            <h2 class="titulo pb-5"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_tit" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">PAe CFM em números</h2>
                      </div>

                      <div class="col-12 pb-4 col-sm-4">
                            <div class="box_dados d-flex">
                                  <div class="container">
                                        <div class="row g-0">

                                              <div class="col-12 text-center">
                                                  <h2 class="text_lower pb-3"><b class="text_aument">+ 90 </b>MILHÕES</h2>
                                                  <p class="text_p text-start">Lorem Ipsum Dolor est sit ametus Lorem ipsum dolor</p>
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
                                                  <h2 class="text_lower pb-3"><b class="text_aument">+ 18 </b>BILHÕES</h2>
                                                  <p class="text_p text-start">Lorem Ipsum Dolor est sit ametus Lorem ipsum dolor</p>
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
                                            <h2 class="text_lower pb-3"><b class="text_aument">+ 20 </b>MILHÕES</h2>
                                            <p class="text_p text-start">Lorem Ipsum Dolor est sit ametus Lorem ipsum dolor</p>
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
                        <h2 class="titulo pb-5 pt-5"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_tit" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">Manuais</h2>
                    </div>

                    <div class="col-12">

                          <div>
                                  <ul class="list-group list-group-flush">
                                  <?php 

                                              $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' => 'manuais',
                                                'posts_per_page' => 4,
                                              );
                                              $arr_posts = new WP_Query( $args );

                                              if ( $arr_posts->have_posts() ) :

                                                while ( $arr_posts->have_posts() ) :
                                                    $arr_posts->the_post();
                                                    ?>



                                                  

                                                          <li class="list-group-item"><a class="text_manual_central" href="<?php the_permalink(); ?>"><?php the_title() ?></a><p class="text-secondary"><?php the_time( 'd-m-Y' )?> - <?php the_time( 'G:i' ) ?> </p></li>


                           
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
                        <h2 class="titulo pb-5"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icone-acesso.svg" class="icone_tit" alt="Icone ilustrativo com 3 cores, verde claro, verde escuro, verde  médio">Perguntas Frequentes</h2>
                    </div>

                    <div class="col-12">


                            <div class="mb-3">

                                  <div class="accordion accordion-flush" id="accordionFlushExample">



                                  <?php  

                                              $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' => 'FAQ',
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