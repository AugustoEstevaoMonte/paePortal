<?php get_header();?>
<section class="bg_white p-5 shadow">
        <div class="container">
                    <div class="row">
                            <div class="col-12">
                                <h1 class="text_Maior"><?php the_title()?></h1>
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

<?php get_footer();?>