<?php

/**
 * A category manuais template
 */
?>

<?php get_header('', array('titulo' => 'PAE - ' . get_the_title())) ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<section class="bg_white p-5 shadow">

<div class="container">

  <div class="row">
    <div class="col-12">
      <h1><?php the_title(); ?></h1>
      <p class="text_time"><?php the_time('d/m/Y') ?> | <?php the_time('G:i') ?></p>
    </div>
  </div>
</div>
</section>

<article class="mt-5">
<div class="container">
  <div class="row">
    <div class="col-12">
      <div style="min-height: 350px;" class="contentNoticias">
        <p><?php the_content(); ?></p>
      </div>
    </div>
  </div>
</div>
</article>







<!--FIM DOS POSTS-->
<?php endwhile;
else : ?>
<?php endif; ?>

<?php get_footer()?>