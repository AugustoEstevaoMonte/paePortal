<!--INICIO DO FOOTER DO CFM-->

<footer id="changeBG" class="mt-5 bg_green">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-5 p-4">
        <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/logoCFMmenor.png" alt="Logo do conselho federal de Medicina" class="img-fluid"></a>
      </div>

      <div class="col d-flex justify-content-end">
        <div class="social_imgs d-none d-sm-flex">
          <?php 
                $args = array(
                'post_type' => 'Redes Sociais',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                );
                $arr_posts = new WP_Query( $args );
                if ( $arr_posts->have_posts() ) :
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
        ?>

        <?php
            if ( has_post_thumbnail() ) :
              $imageid = get_post_thumbnail_id( $post->ID );
              $image_thumb = wp_get_attachment_image_src( $imageid, 'blog-page' );
              $image_url = wp_get_attachment_url( $imageid );
            endif;
        ?>

          <?php $imageContent = get_the_content();$removeTagOfContent = strip_tags($imageContent, '<p> <a>');?>
          <a href="<?php echo $removeTagOfContent;?>" target="_blank"><img src="<?php echo $image_thumb[0]; ?>" alt="<?php the_title(); ?>"></a>

          <?php
                endwhile;
              endif;  
          ?>

        </div>
      </div>

    </div>
  </div>
</footer>

<footer id="changeBG" class="bg_black d-block d-sm-none">
  <div class="container">
    <div class="row">
      <div class="col mt-2 pb-1">
        <div class="social_imgs mt-3">
          
          <?php 

                  $args = array(
                  'post_type' => 'Redes Sociais',
                  'post_status' => 'publish',
                  'posts_per_page' => 6,
                  );
                  $arr_posts = new WP_Query( $args );

                  if ( $arr_posts->have_posts() ) :

                  while ( $arr_posts->have_posts() ) :
                  $arr_posts->the_post();
          ?>

        <?php
            if ( has_post_thumbnail() ) :
              $imageid = get_post_thumbnail_id( $post->ID );
              $image_thumb = wp_get_attachment_image_src( $imageid, 'blog-page' );
              $image_url = wp_get_attachment_url( $imageid );
            endif;
        ?>
          <?php $imageContent = get_the_content();$removeTagOfContent = strip_tags($imageContent, '<p> <a>');?>
          <a href="<?php echo $removeTagOfContent;?>" target="_blank"><img src="<?php echo $image_thumb[0]; ?>" alt="<?php the_title(); ?>"></a>

          <?php
                endwhile;
              endif;  
          ?>

        </div>
      </div>
    </div>
  </div>
</footer>

<!--INICIO DOS SCRIPTS DO BOOTSTRAP-->
<script type="text/javascript" src="https://portal.cfm.org.br/wp-content/themes/portalcfm/assets/lib/fontawesome/all.js" id="fontawesome-js-js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/lib/nivo-slider/jquery.nivo.slider.js"></script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/app.js"></script>

<!--FIM DOS SCRIPTS DO BOOTSTRAP-->

<!--FIM DO FOOTER DO CFM-->
</body>

</html>