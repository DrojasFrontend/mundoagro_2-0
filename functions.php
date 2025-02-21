<?php
/** * mundoagro_2.0 functions and definitions *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/ *
 * @package mundoagro_2.0 */

/* Mundoagro */
define('THEME_VERSION', '1.0.0');
define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('THEME_IMG', THEME_URL . '/images/');

require_once THEME_PATH . '/inc/styles-and-js.php';
/* Mundoagro */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.13' );
}

if ( ! function_exists( 'mundoagro_2_0_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mundoagro_2_0_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mundoagro_2.0, use a find and replace
		 * to change 'mundoagro_2-0' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mundoagro_2-0', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*		 * Enable support for Post Thumbnails on posts and pages.		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'mundoagro_2-0' ),
				'menu-2' => esc_html__( 'Footer', 'mundoagro_2-0' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'mundoagro_2_0_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**		 * Add support for core custom logo.		 *
		 * @link https://codex.wordpress.org/Theme_Logo		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'mundoagro_2_0_setup' );

/** * Set the content width in pixels, based on the theme's design and stylesheet. *
 * Priority 0 to make it available to lower priority callbacks. *
 * @global int $content_width */
function mundoagro_2_0_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mundoagro_2_0_content_width', 640 );
}
add_action( 'after_setup_theme', 'mundoagro_2_0_content_width', 0 );

/** * Register widget area. *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar */
function mundoagro_2_0_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mundoagro_2-0' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mundoagro_2-0' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'mundoagro_2-0' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Top Banner', 'mundoagro_2-0' ),
		'id'            => 'banner-top',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Body Banner 1', 'mundoagro_2-0' ),
		'id'            => 'banner-1',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Body Banner 2', 'mundoagro_2-0' ),
		'id'            => 'banner-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Destacados', 'mundoagro_2-0' ),
		'id'            => 'destacados-widget',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Actualidad', 'mundoagro_2-0' ),
		'id'            => 'actualidad-widget',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Columnas', 'mundoagro_2-0' ),
		'id'            => 'columnas-widget',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'mundoagro_2_0_widgets_init' );

/** * Enqueue scripts and styles. */
function mundoagro_2_0_scripts() {
	wp_enqueue_style( 'mundoagro_2-0-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'mundoagro_2-0-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mundoagro_2-0-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mundoagro_2_0_scripts' );

/** * Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/** * Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/** * Functions which enhance the theme by hooking into WordPress. */
require get_template_directory() . '/inc/template-functions.php';

/** * Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/** * Load Jetpack compatibility file. */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Custom Revistas
add_action( 'init', 'create_events' );
function create_events() {
  $labels = array(
	'name' => _x('Revistas', 'post type general name'),
	'singular_name' => _x('Revistas', 'post type singular name'),
	'add_new' => _x('Agregar Revista', 'Revistas'),
	'add_new_item' => __('Agregar nueva Revista'),
	'edit_item' => __('Editar Revista'),
	'new_item' => __('Nueva Revista'),
	'view_item' => __('Ver'),
	'search_items' => __('Buscar'),
	'not_found' =>  __('No encontrado'),
	'not_found_in_trash' => __('No encontrado buscar en papelera'),
	'parent_item_colon' => '',
  );
  $supports = array('title', 'editor', 'custom-fields', 'revisions', 'excerpt', 'thumbnail');
  register_post_type( 'revistas',
	array(
	  'labels' => $labels,
	  'public' => true,
	  'supports' => $supports,
	  'menu_position' => 4,
	'has_archive' => true,
	)
  );
  }
 
function crear_mis_taxonomias() {
	register_taxonomy('destacados', 'post', array(
		'hierarchical' => true, 'label' => 'Destacados',
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var' => true, 'rewrite' => true, 'public' => true, 'show_ui' => true));

	register_taxonomy('tematica', 'post', array(
		'hierarchical' => true, 'label' => 'Temática',
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var' => true, 'rewrite' => true, 'public' => true, 'show_ui' => true));
}
add_action('init', 'crear_mis_taxonomias', 0);


if ( !function_exists('palfrey_pagination') ) {
function palfrey_pagination( $range = 5 ) {

	if( is_singular() )
		return;

	// $paged - number of the current page
	global $paged, $wp_query;

	// Stop execution if there's only 1 page.
	if( $wp_query->max_num_pages <= 1 )
		return;
 
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

	//if ( !$max_page )
		$max   = intval( $wp_query->max_num_pages );

	if ( $max > 1 )
			if ( !$paged ) $paged = 1;
 
	// Add current page to the array.
	if ( $paged >= 1 )
		$links[] = $paged;
 
	// Add the pages around the current page to the array.
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
 
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	
	// The pagination
	echo "\n" . '<nav aria-label="Page navigation example">
								<ul class="pagination display-block relative align-center width-1of1">' . "\n";
 
	// Link to 'Newer' posts.
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link( '<div class="display-inline-block relative float-left"><span class="pagination-prev">&laquo;</span></div>' ) );
	}else{
	echo '<li><div class="display-inline-block relative float-left pointer-events-none" style="opacity: .6;"><span class="pagination-prev">&laquo;</span></div></li>';
	}
	
	// Link to first page, plus ellipses if necessary.
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? 'class="page-item active"' : '';
 
		printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '01' );
 
		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}
 
	// Link to current page, plus 2 pages in either direction if necessary.
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="page-item active"' : '';
		printf( '<li%s class="page-item"><a href="%s" class="page-link">'. sprintf("%'.02d\n", $link) .'</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link) ) );
	}
 
	// Link to last page, plus ellipses if necessary.
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";
 
		$class = $paged == $max ? ' class="page-item active"' : '';
		printf( '<li%s class="page-item"><a href="%s" class="page-link">'. sprintf("%'.02d\n", $max) .'</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max) ) );
	}
 
	// Link to 'Older' posts.
	if ( get_next_posts_link() ) {
		printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link( '<div class="display-inline-block relative float-right"><span class="pagination-next">&raquo;</span></div>' ) );
	}else{
	echo '<li><div class="display-inline-block relative float-right pointer-events-none" style="opacity: .6;"><span class="pagination-next">&raquo;</span></div></li>';
	}
 
	echo "\n" . '           </ul>
			</nav>' . "\n";
 
	}
}


// MOSTRAR Filtro de tematicas en "todas las entradas"
/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'post'; // change to your post type
	$taxonomy  = 'tematica'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'post'; // change to your post type
	$taxonomy  = 'tematica'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}


/**
 * Get related posts of post
 * @since 1.0.0
 */
function codeless_get_related_posts( $post_id, $related_count, $args = array() ) {
  $terms = get_the_terms( $post_id, 'category' );
  
  if ( empty( $terms ) ) $terms = array();
  
  $term_list = wp_list_pluck( $terms, 'slug' );
  
  $related_args = array(
	'post_type' => 'post',
	'posts_per_page' => $related_count,
	'post_status' => 'publish',
	'post__not_in' => array( $post_id ),
	'orderby' => 'rand',
	'tax_query' => array(
	  array(
		'taxonomy' => 'category',
		'field' => 'slug',
		'terms' => $term_list
	  )
	)
  );

  return new WP_Query( $related_args );
}

/**
 * Custom exceprt
 * usage: excerpt(25)
 */
function excerpt($limit, $post_id) {
      $excerpt = explode(' ', get_the_excerpt($post_id), $limit);

      if (count($excerpt) >= $limit) {
          array_pop($excerpt);
          $excerpt = implode(" ", $excerpt) . ' ...';
      } else {
          $excerpt = implode(" ", $excerpt);
      }

      $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

      return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);

    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . ' ...';
    } else {
        $content = implode(" ", $content);
    }

    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}

/*STOP scaled images*/
add_filter('big_image_size_threshold', '__return_false');

/*image sizes */
if ( function_exists( 'add_image_size' ) ) { 
    /*add_image_size( 'thumbnail-xs', 220, 165, true );*/
    /*add_image_size( 'thumbnail-sm', 384, 288, true );*/
    add_image_size( 'thumbnail-md', 544, 408, true );
    /*add_image_size( 'thumbnail-lg', 700, 525, true );*/
    
    /*add_image_size( 'wide-xs', 224, 126, true );
    add_image_size( 'wide-sm', 384, 216, true );*/
    add_image_size( 'wide-md', 544, 306, true );
    /*add_image_size( 'wide-lg', 704, 396, true );*/
    
    
    add_image_size( 'featured-img', 896, 504, true );
}



function traducir_tutor_lms($translated_text, $text, $domain) {
    $traducciones = array(
        'Complete Course' => 'Completar Revista',
        'In Progress Courses' => 'Revistas en Curso',
        'You enrolled in this course on' => 'Te inscribiste en esta Revista el',
        'Enrollment valid until' => 'Inscripción válida hasta',
        'Total Courses' => 'Total de Revistas',
		'Start Learning' => 'Ver Revista',
		'Dashboard' => 'Panel',
		'My Profile' => 'Mi perfil',
		'Order History' => 'Historial de pedidos',
		'Settings' => 'Ajustes',
		'Logout' => 'Cerrar sesión',
		'My Courses' => 'Mis Revistas',
		'Course Name' => 'Nombre Revista',
		'Enrolled' => 'Inscritos',
		'View All' => 'Ver todo',
		'Courses' => 'Revistas',
		'Release Date (newest first)' => 'Fecha de lanzamiento (lo más nuevo primero)',
		'Release Date (oldest first)' => 'Fecha de lanzamiento (la más antigua primero)',
		'Course Title (a-z)' => 'Titulo Revista (a-z)',
		'Course Title (z-a)' => 'Titulo Revista (z-a)',
		'By' => 'Por',
		'Enrollment validity' => 'Validez de inscripción',
		'days' => 'Dias',
		'Register' => 'Registro',
		'View Cart' => 'Ver carrito',
		
    );

    if (isset($traducciones[$text])) {
        return $traducciones[$text];
    }

    return $translated_text;
}
add_filter('gettext', 'traducir_tutor_lms', 10, 3);





