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

//FAZ O MENU PRINCIPAL DO SITE TER DROPDOWN DO BOOTSTRAP 
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
     if ( array_key_exists( 'data-toggle', $atts ) ) {
         unset( $atts['data-toggle'] );
         $atts['data-bs-toggle'] = 'dropdown';
     }
     return $atts;
}
// FIM DO DROPDOWN DO BOOTSTRAP

//Habilitar o menu no wordpress
add_theme_support('menus');
add_theme_support( 'post-thumbnails' ); 
//Fim do habilitar menu


//REGISTRAR DOIS MENUS NO WORDPRESS
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu-principal' ),
      'extra-menu' => __( 'Acesso-rapido' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 //FIM DO REGISTRAR DOIS MENUS

 function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



/* Custom Post Type START */

//CUSTOM POST TYPE NOTICIAS
function custom_post_type_noticias() {

	register_post_type('noticias', array(
		'label' => 'Noticias',
		'description' => 'Noticias',
		'public' => true,
		'menu_icon' => 'dashicons-feedback',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'noticias', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats', 'thumbnail', 'excerpt'),

		'labels' => array (
			'name' => 'Noticias',
			'singular_name' => 'Noticias',
			'menu_name' => 'Noticias',
			'add_new' => 'Adicionar Nova',
			'add_new_item' => 'Adicionar Novas Noticias',
			'edit' => 'Editar',
			'edit_item' => 'Editar Noticias',
			'new_item' => 'Nova Noticia',
			'view' => 'Ver Noticias',
			'view_item' => 'Ver Noticias',
			'search_items' => 'Procurar Noticias',
			'not_found' => 'Não foram encontradas noticias',
			'not_found_in_trash' => 'Não foram encontradas noticias no lixo',
		)
	));
}
add_action('init', 'custom_post_type_noticias');




//CUSTOM POST TYPE COMUNICADOS

function custom_post_type_comunicados() {
	register_post_type('comunicados', array(
		'label' => 'Comunicados',
		'description' => 'Comunicados',
		'public' => true,
		'menu_icon' => 'dashicons-format-aside',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'comunicados', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats', 'thumbnail', 'excerpt'),

		'labels' => array (
			'name' => 'Comunicados',
			'singular_name' => 'Comunicados',
			'menu_name' => 'Comunicados',
			'add_new' => 'Adicionar Novos Comunicados',
			'add_new_item' => 'Adicionar Novos Comunicados',
			'edit' => 'Editar',
			'edit_item' => 'Editar Comunicados',
			'new_item' => 'Novos Comunicados',
			'view' => 'Ver Comunicados',
			'view_item' => 'Ver Comunicados',
			'search_items' => 'Procurar Comunicados',
			'not_found' => 'Não foram encontrados comunicados',
			'not_found_in_trash' => 'Não foram encontrados comunicados no lixo',
		)
	));
}
add_action('init', 'custom_post_type_comunicados');

//CUSTOM POST TYPE  MANUAIS


function custom_post_type_manuais() {
	register_post_type('manuais', array(
		'label' => 'Manuais',
		'description' => 'Manuais',
		'public' => true,
		'menu_icon' => 'dashicons-media-document',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'manuais', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats', 'excerpt'),
		'hierarchical' => false,

		'labels' => array (
			'name' => 'Manuais',
			'singular_name' => 'Manual',
			'menu_name' => 'Manuais',
			'add_new' => 'Adicionar Novos Manuais',
			'add_new_item' => 'Adicionar Novos Manuais',
			'edit' => 'Editar',
			'edit_item' => 'Editar Manuais',
			'new_item' => 'Novos Manuais',
			'view' => 'Ver Manuais',
			'view_item' => 'Ver Manuais',
			'search_items' => 'Procurar Manuais',
			'not_found' => 'Não foram encontrados manuais',
			'not_found_in_trash' => 'Não foram encontrados manuais no lixo',
		)
	));
}
add_action('init', 'custom_post_type_manuais');

//CUSTOM POST TYPE FAQ

function custom_post_type_FAQ() {
	register_post_type('FAQ', array(
		'label' => 'FAQ',
		'description' => 'FAQ',
		'public' => true,
		'menu_icon' => 'dashicons-format-chat',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'FAQ', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats', 'excerpt'),

		'labels' => array (
			'name' => 'FAQ',
			'singular_name' => 'FAQ',
			'menu_name' => 'FAQ',
			'add_new' => 'Adicionar Novas Perguntas',
			'add_new_item' => 'Adicionar Nova pergunta ao FAQ',
			'edit' => 'Editar',
			'edit_item' => 'Editar FAQ',
			'new_item' => 'Novas perguntas ao FAQ',
			'view' => 'Ver FAQ',
			'view_item' => 'Ver FAQ',
			'search_items' => 'Procurar perguntas',
			'not_found' => 'Não foram encontradas perguntas no FAQ',
			'not_found_in_trash' => 'Não foram encontradas perguntas no lixo do FAQ',
		)
	));
}
add_action('init', 'custom_post_type_FAQ');

//CUSTOM POST TYPE BANNER

function custom_post_type_banner() {
	register_post_type('banner', array(
		'label' => 'Banner',
		'description' => 'Banner',
		'public' => true,
		'menu_icon' => 'dashicons-megaphone',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'banner', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats', 'thumbnail', 'excerpt'),

		'labels' => array (
			'name' => 'Banner',
			'singular_name' => 'Banner',
			'menu_name' => 'Slide Show',
			'add_new' => 'Adicionar Novo Banner',
			'add_new_item' => 'Adicionar Novos Banners',
			'edit' => 'Editar',
			'edit_item' => 'Editar Banner',
			'new_item' => 'Novos Banners',
			'view' => 'Ver Banners',
			'view_item' => 'Ver Banners',
			'search_items' => 'Procurar Banners',
			'not_found' => 'Não foram encontrados Banners',
			'not_found_in_trash' => 'Não foram encontrados banners no lixo',
		)
	));
}
add_action('init', 'custom_post_type_banner');

//CUSTOM POST TYPE TUTORIAIS

function custom_post_type_tutoriais() {

	register_post_type('tutoriais', array(
		'label' => 'Tutoriais',
		'description' => 'Tutoriais',
		'public' => true,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'tutoriais', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats', 'excerpt'),
		'hierarchical' => false,

		'labels' => array (
			'name' => 'Tutoriais',
			'singular_name' => 'Tutoriais',
			'menu_name' => 'Tutoriais',
			'add_new' => 'Adicionar Novos Tutoriais',
			'add_new_item' => 'Adicionar Novos Tutoriais',
			'edit' => 'Editar Tutoriais',
			'edit_item' => 'Editar Tutoriais',
			'new_item' => 'Novos Tutoriais',
			'view' => 'Ver Tutoriais',
			'view_item' => 'Ver Tutoriais',
			'search_items' => 'Procurar Tutoriais',
			'not_found' => 'Não foram encontrados tutoriais',
			'not_found_in_trash' => 'Não foram encontrados tutoriais no lixo',
		)
	));
}
add_action('init', 'custom_post_type_tutoriais');

// CUSTOM POST TYPE REDES SOCIAIS

function custom_post_type_redes_sociais() {

	register_post_type('redes sociais', array(
		'label' => 'Redes Sociais',
		'description' => 'Redes Sociais',
		'public' => true,
		'menu_icon' => 'dashicons-twitter',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'redes sociais', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats','thumbnail', 'excerpt'),
		

		'labels' => array (
			'name' => 'Redes Sociais',
			'singular_name' => 'Redes Sociais',
			'menu_name' => 'Redes Sociais',
			'add_new' => 'Adicionar Novas Redes Sociais',
			'add_new_item' => 'Adicionar Novas Redes Sociais',
			'edit' => 'Editar Redes Sociais',
			'edit_item' => 'Editar Redes Sociais',
			'new_item' => 'Novos Redes Sociais',
			'view' => 'Ver Redes Sociais',
			'view_item' => 'Ver Redes Sociais',
			'search_items' => 'Procurar Redes Sociais',
			'not_found' => 'Não foram encontradas redes sociais',
			'not_found_in_trash' => 'Não foram encontradas redes sociais no lixo',
		)
	));
}
add_action('init', 'custom_post_type_redes_sociais');

/* Custom Post Type END */




class Custom_Nav_Walker extends Walker_Nav_Menu {

	public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
	
			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
			} else {
					$t = "\t";
					$n = "\n";
			}
			$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
	
			$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
	
			/**
			 * Filters the arguments for a single nav menu item.
			 *
			 * @since 4.4.0
			 *
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param WP_Post  $item  Menu item data object.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */
			$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
	
			/**
			 * Filters the CSS class(es) applied to a menu item's list item element.
			 *
			 * @since 3.0.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
			 * @param WP_Post  $item    The current menu item.
			 * @param stdClass $args    An object of wp_nav_menu() arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
	
			/**
			 * Filters the ID applied to a menu item's list item element.
			 *
			 * @since 3.0.1
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
			 * @param WP_Post  $item    The current menu item.
			 * @param stdClass $args    An object of wp_nav_menu() arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
	
			$output .= $indent . (0 === $depth ? '<div ' : '<li ' ) . $id . $class_names . '>';
	
			$atts           = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target ) ? $item->target : '';
			$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
			$atts['href']   = ! empty( $item->url ) ? $item->url : '';
	
			/**
			 * Filters the HTML attributes applied to a menu item's anchor element.
			 *
			 * @since 3.6.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array $atts {
			 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
			 *
			 *     @type string $title  Title attribute.
			 *     @type string $target Target attribute.
			 *     @type string $rel    The rel attribute.
			 *     @type string $href   The href attribute.
			 * }
			 * @param WP_Post  $item  The current menu item.
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
	
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
					if ( ! empty( $value ) ) {
							$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
							$attributes .= ' ' . $attr . '="' . $value . '"';
					}
			}
	
			/** This filter is documented in wp-includes/post-template.php */
			$title = apply_filters( 'the_title', $item->title, $item->ID );
	
			/**
			 * Filters a menu item's title.
			 *
			 * @since 4.4.0
			 *
			 * @param string   $title The menu item's title.
			 * @param WP_Post  $item  The current menu item.
			 * @param stdClass $args  An object of wp_nav_menu() arguments.
			 * @param int      $depth Depth of menu item. Used for padding.
			 */
			$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
	
			$item_output  = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
	
			/**
			 * Filters a menu item's starting output.
			 *
			 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
			 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
			 * no filter for modifying the opening and closing `<li>` for a menu item.
			 *
			 * @since 3.0.0
			 *
			 * @param string   $item_output The menu item's starting HTML output.
			 * @param WP_Post  $item        Menu item data object.
			 * @param int      $depth       Depth of menu item. Used for padding.
			 * @param stdClass $args        An object of wp_nav_menu() arguments.
			 */
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	
	public function end_el( &$output, $item, $depth = 0, $args = [] ) {
	
			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
			} else {
					$t = "\t";
					$n = "\n";
			}
			$output .= (0 === $depth ? "</div>{$n}" : "</li>{$n}");
	}
}


function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __( '«' ),
            'next_text'    => __( '»' ),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<div class="pagination justify-content-center"><ul class="pagination">';

        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></div>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

?>


