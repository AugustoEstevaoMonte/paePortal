<?php
/**
 * Template Name: Category Noticias e Comunicados Template
 */
get_header();
?>
<section class="bg_white p-5 shadow">
        <div class="container">
                    <div class="row">
                            <div class="col-12">
                                <h1 class="titulo_category_pages text-start">Noticias e Comunicados</h1>
                            </div>
                    </div>
        </div>
</section>

<div class="content" style="min-height: 440px;">
<?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $query = new WP_Query( array(
              'post_type' => array('Noticias', 'Comunicados', 'Banner'),
              'orderby' => 'meta_value',
              'posts_per_page' => 5,
              'paged' => $paged
          ) );
      ?>

      <?php if ( $query->have_posts() ) : ?>

      <!-- begin loop -->
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <section class="mt-4 mb-4">

<div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card_category_proprieties shadow">

                <p class="text-start text_category_date"><?php the_time('d/m/Y')?></p>

                        <div class="row g-0">

                              <div class="col-12 col-md-4 col-lg-2 padding_left_and_right">
                              <?php
                                        if ( has_post_thumbnail() ) :
                                          $imageid = get_post_thumbnail_id( $post->ID );
                                          $image_thumb = wp_get_attachment_image_src( $imageid, 'blog-page' );
                                          $image_url = wp_get_attachment_url( $imageid );
                                        endif;
                              ?>
                               <a href="<?php the_permalink()?>"><img class="w-100 h-100 image_category_thumb" src="<?php echo $image_thumb[0]; ?>" title="<?php the_title(); ?>"></a>
                              </div>

                              <div class="col">
                                  <h1 class="mb-2"><a class="titulo_categorias_card" href="<?php the_permalink()?>"><?php the_title() ?></a></h1>
                                    <p class=""><a class="text-decoration-none text_category_paragraph" href="<?php the_permalink()?>"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, ' [...]');?></a></p>
                                    <!--echo mb_strimwidth($content, 0, 400, '...'); FAZ O EFEITO DO CONTENT APARECER SOMENTE ALGUMAS PALAVRAS EM VEZ DO CONTENT INTEIRO-->
                              </div>
                        </div>
                </div>
            </div>
        </div>
</div>
</section>


      <?php endwhile; ?>
      <!-- end loop -->


      <?php echo bootstrap_pagination($query); ?>

      <?php wp_reset_postdata(); ?>

      <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

</div>



<?php get_footer();?>