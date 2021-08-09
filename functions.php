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

//Habilitar postagens de noticias e comunicados

function custom_post_type_noticias() {
	register_post_type('noticias', array(
		'label' => 'Noticias',
		'description' => 'Noticias',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'noticias', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Noticias',
			'singular_name' => 'Noticias',
			'menu_name' => 'Noticias',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Noticia',
			'edit' => 'Editar',
			'edit_item' => 'Editar Noticia',
			'new_item' => 'Novo Noticia',
			'view' => 'Ver Noticia',
			'view_item' => 'Ver Noticia',
			'search_items' => 'Procurar Noticias',
			'not_found' => 'Nenhuma Noticia Encontrada',
			'not_found_in_trash' => 'Nenhuma Noticia  Encontrada no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_noticias');

//COMUNICADOS


function custom_post_type_comunicados() {
	register_post_type('comunicados', array(
		'label' => 'Comunicados',
		'description' => 'Comunicados',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'comunicados', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Comunicados',
			'singular_name' => 'Comunicados',
			'menu_name' => 'Comunicados',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Noticia',
			'edit' => 'Editar',
			'edit_item' => 'Editar Noticia',
			'new_item' => 'Novo Noticia',
			'view' => 'Ver Noticia',
			'view_item' => 'Ver Noticia',
			'search_items' => 'Procurar Comunicados',
			'not_found' => 'Nenhum Comunicado Encontrado',
			'not_found_in_trash' => 'Nenhum Comunicado  Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_comunicados');

?>