<?php

/**
 * A category manuais template
 */
?>

<?php get_header('', array('titulo' => 'PAE - ' . get_the_title())) ?>

<!--INICIO DO VLIBRAS-->
<a href="javascript: return void(0);" vw-access-button="" class="vlibras" title="VLibras"></a>


<div vw class="d-none d-md-block">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

<div class="sideBar d-none d-md-block" style="position: fixed; right: 0; top: 34%;">
  <div>
    <a id="contrasteBtn" href="javascript:void(0);" class="acessButton"><i class="fas fa-adjust"></i></a>
  </div>
  <div class="mt-3">
    <a href="javascript:void(0);" class="acessButton vLibrasActivator"><i class="fas fa-sign-language"></i></a>
  </div>
</div>
<!--FIM  DO VLIBRAS-->


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<section class="changeBG bg_white p-5 shadow">

<div class="container">

  <div class="row">
    <div class="col-12">
      <h1 class="titulo_category_con"><?php the_title(); ?></h1>
      <p class="text_category_date"><?php the_time('d/m/Y') ?> | <?php the_time('G:i') ?></p>
    </div>
  </div>
</div>
</section>

<article class="mt-5">
<div class="container">
  <div class="row">
    <div class="col-12">
      <div style="min-height: 380px;" class="single_con_change contentNoticias">
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