<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );
add_filter('show_admin_bar', '__return_false');

function replace_content($content)
{
	$content = str_replace('&nbsp;', ' ', $content);
	return $content;
}
if (!current_user_can('administrator')):
	show_admin_bar(false);
endif;
add_filter('the_content','replace_content');
add_filter('the_excerpt', 'replace_content');

add_action( 'after_setup_theme', 'mainMenu' );
add_theme_support( 'post-thumbnails' );

function mainMenu() {
	register_nav_menu( 'main', 'Основное меню' );
	register_nav_menu( 'footer', 'Меню в футере' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owl-slide', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array(), '2.3.4', true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.css' );
	wp_enqueue_style( 'owl-slide', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'slick-slide', get_template_directory_uri() . '/css/slick/slick.css' );
}

add_image_size('image-play', 1280, 700, true );
add_image_size('image-slider', 1920, 560, true );

add_action( 'init', 'register_post_types' );
function register_post_types() {

	register_post_type( 'Slots', [
		'label'  => null,
		'labels' => [
			'name'               => 'Слоты', 
			'singular_name'      => 'Слот', 
			'add_new'            => 'Добавить слот', 
			'add_new_item'       => 'Добавление слотов', 
			'edit_item'          => 'Редактирование слота', 
			'new_item'           => 'Новый слот', 
			'view_item'          => 'Смотреть слоты', 
			'search_items'       => 'Искать слоты', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Слоты',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'comments' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}
