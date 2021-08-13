
<?php get_header(); ?>
  <!--FIM DO MENU-->
<?php if(have_posts() ) : while ( have_posts() ) : the_post();?>

  <section class="bg_white p-5">

    <div class="container">

          <div class="row">
                <div class="col-12">
                       <h1 class="title_cus"><?php the_title()?></h1>
                       <p><?php the_time( 'd/m/Y' )?> - <?php the_time( 'G:i' ) ?></p>
                </div>
          </div>
    </div>
  </section>

  <article class="mt-5">
          <div class="container">
                  <div class="row">
                          <div class="col-12">
                                <?php the_content()?>
                          </div>
                  </div>
          </div>
  </article>

<?php endwhile; else: ?>
  <p><?php _e('Nenhum post encontrado de acordo com sua pesquisa!')?></p>
<?php endif; ?>

 <!--FOOTER ESTAVA AQUI-->
 <?php get_footer(); ?>



</html>