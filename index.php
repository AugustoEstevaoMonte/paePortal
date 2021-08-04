
<?php get_header(); ?>
  <!--FIM DO MENU-->
<?php if(have_posts() ) : while ( have_posts() ) : the_post();?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; else: ?>
  <p><?php _e('Nenhum post encontrado de acordo com sua pesquisa!')?></p>
<?php endif; ?>

 <!--FOOTER ESTAVA AQUI-->
 <?php get_footer(); ?>


</body>

</html>