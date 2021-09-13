<?php
/**
* A category comunicados template
*/
?>

<?php get_header(); ?>
  <!--FIM DO MENU-->
<?php if(have_posts() ) : while ( have_posts() ) : the_post();?>

  <section class="bg_white p-5 shadow">

    <div class="container">

          <div class="row">
                <div class="col-12">
                       <h1><?php the_title()?></h1>
                       <p class="text_category_date"><?php the_time( 'd/m/Y' )?> | <?php the_time( 'G:i' ) ?></p>
                </div>
          </div>
    </div>
  </section>

  <article id="post-<?php the_ID(); ?>" class="mt-5">
          <div class="container">
                  <div class="row">
                          <div class="col-12">
                         <div class="contentNoticias" style="min-height: 380px;">
                                    <p><?php the_content()?></p>
                                </div>
                          </div>
                  </div>
          </div>
  </article>

<?php endwhile; else: ?>
<?php endif; ?>

 <!--FOOTER ESTAVA AQUI-->
 <?php get_footer(); ?>



</html>


