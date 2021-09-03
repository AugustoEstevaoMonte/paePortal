<?php
/**
 * Template Name: Manuais e Comunicados Template
 */
get_header();
?>
<section class="bg_white p-5 shadow">
        <div class="container">
                    <div class="row">
                            <div class="col-12">
                                <h1 class="text_Maior">Manuais e Tutoriais</h1>
                            </div>
                    </div>
        </div>
</section>

<?php  

$args = array(
  'post_type' => 'Manuais',
  'post_status' => 'publish',
  'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :

  while ( $arr_posts->have_posts() ) :
      $arr_posts->the_post();
      ?>
       <section class="mt-4 mb-4">

                        <div class="container">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="bd_color shadow">

                                             <p class="text-start text_Dia"><?php the_time('d/m/Y')?></p>

                                            <h1 class="tit_Noticias mb-4"><a class="text-decoration-none" href="<?php the_permalink()?>"><?php the_title() ?></a></h1>
                                            <p class="tit_Para"><a class="text-decoration-none" href="<?php the_permalink()?>"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, ' [...]');?></a></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
        </section>




      <?php
  endwhile;
endif;

?>


<?php  

$args = array(
  'post_type' => 'Tutoriais',
  'post_status' => 'publish',
  'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :

  while ( $arr_posts->have_posts() ) :
      $arr_posts->the_post();
      ?>
       <section class="mt-4 mb-4">

                        <div class="container">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="bd_color shadow">

                                             <p class="text-start text_Dia"><?php the_time('d/m/Y')?></p>

                                            <h1 class="tit_Noticias mb-4"><a class="text-decoration-none" href="<?php the_permalink()?>"><?php the_title() ?></a></h1>
                                            <p class="tit_Para"><a class="text-decoration-none" href="<?php the_permalink()?>"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, ' [...]');?></a></p>
                                            <!--echo mb_strimwidth($content, 0, 400, '...'); FAZ O EFEITO DO CONTENT APARECER SOMENTE ALGUMAS PALAVRAS EM VEZ DO CONTENT INTEIRO-->
                                        </div>
                                    </div>
                                </div>
                        </div>
        </section>




      <?php
  endwhile;
endif;

?>

<?php get_footer();?>