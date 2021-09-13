<?php
/**
 * Template Name: Category FAQ Template
 */
get_header();
?>

<section class="bg_white p-5 shadow">

    <div class="container">
        <div class="row">
              <div class="col-12">
                    <h1 class="titulo_category_pages text-start">Perguntas Frequentes</h1>
              </div>
        </div>
    </div>

</section>

<div class="content"  style="min-height: 440px;">
<?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $query = new WP_Query( array(
              'post_type' => array('FAQ'),
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

                                             <p class="text-start text_category_date m-0"><?php the_time('d/m/Y')?></p>

                                            <h1 class="mb-2"><a class="titulo_categorias_card" href="<?php the_permalink()?>"><?php the_title() ?></a></h1>
                                            <p class=""><a class="text-decoration-none text_category_paragraph" href="<?php the_permalink()?>"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, '...');?></a></p>
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