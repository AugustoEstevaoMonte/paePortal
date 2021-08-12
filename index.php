
<?php get_header(); ?>
  <!--FIM DO MENU-->
<?php if(have_posts() ) : while ( have_posts() ) : the_post();?>

  <section class="mt-5">


    <div class="container">

          <div class="row">
                <div class="col-12">
                      <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid') ) ?>
                       <?php the_title()?>
                       <?php the_content() ?>
                </div>
          </div>
    </div>

  </section>

<?php endwhile; else: ?>
  <p><?php _e('Nenhum post encontrado de acordo com sua pesquisa!')?></p>
<?php endif; ?>

 <!--FOOTER ESTAVA AQUI-->
 <?php get_footer(); ?>



</html>