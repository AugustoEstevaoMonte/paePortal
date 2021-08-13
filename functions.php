<?php 

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//Habilitar o menu no wordpress
add_theme_support('menus');
//Fim do habilitar menu

add_theme_support( 'post-thumbnails' ); 


//CRIA A CATEGORIA DAS NOTICIAS

add_action('init', 'create_post_type_noticias');
function create_post_type_noticias()
{
  register_post_type(
    'noticias',
    array(
      'labels' => array(
        'name' => __('Notícias'),
        'singular_name' => __('Notícias')
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
} 



//CRIA A CATEGORIA DE COMUNICADOS

add_action('init', 'create_post_type_comunicados');
function create_post_type_comunicados()
{
  register_post_type(
    'comunicados',
    array(
        'taxonomies' => array('comunicados'),
        'labels' => array(
        'name' => __('Comunicados'),
        'singular_name' => __('Comunicados')
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}