<?php

define( "THEME_URI", get_stylesheet_directory_uri() );

add_action( 'wp_enqueue_scripts', 'sc_enqueue' );
function sc_enqueue() {
    wp_enqueue_style( 'bootstrap', THEME_URI . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main-style', THEME_URI . '/style.css', array( 'bootstrap' ), '1.0.12');
	wp_enqueue_script('jquery');
}

add_theme_support( 'custom-logo', array(
    'height' => 100,
    'width' => 385
) );

add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'sc_register_nav_menus' );
function sc_register_nav_menus() {
    register_nav_menu( 'header_menu_place', 'Header Menu' );
	register_nav_menu( 'footer_menu_place', 'Footer Menu' );
}
add_action( 'widgets_init', 'sc_widgets_init' );
function sc_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer 1', 'sc' ),
        'id' => 'sidebar-1',
        'description' => __( 'Add widgets here to appear in your footer.', 'sc' ),
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'menu', [
		'label'  => null,
		'labels' => [
			'name'               => 'menu', // основное название для типа записи
			'singular_name'      => 'item', // название для одной записи этого типа
			'add_new'            => 'add item', // для добавления новой записи
			'add_new_item'       => 'Добавление item', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'edit item', // для редактирования типа записи
			'new_item'           => 'new item', // текст новой записи
			'view_item'          => 'vied item', // для просмотра записи этого типа.
			'search_items'       => 'Find item', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'menu', // название меню
		],
		'description'         => 'Ассортимент кафе',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['types_of_dish'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'types_of_dish', [ 'menu' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Dishes Type',
			'singular_name'     => 'Type of dish',
			'search_items'      => 'Search dish type',
			'all_items'         => 'All types of dishes',
			'view_item '        => 'View type of dish',
			'parent_item'       => 'Parent type of dish',
			'parent_item_colon' => 'Parent type of dish:',
			'edit_item'         => 'Edit type of dish',
			'update_item'       => 'Update type of dish',
			'add_new_item'      => 'Add New type of dish',
			'new_item_name'     => 'New type of dish name',
			'menu_name'         => 'Type of dish',
		],
		'description'           => 'Types of dishes in the menu', // описание таксономии
		'public'                => true,
		'hierarchical'          => false,
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}