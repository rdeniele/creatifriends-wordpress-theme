<?php
/**
 * CreatiFriends theme functions.
 *
 * @package CreatiFriends
 */

namespace CreatiFriends;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CREATIFRIENDS_VERSION', '1.0.0' );

/**
 * Theme setup: register supports, image sizes, nav menus.
 */
function setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
		'navigation-widgets',
	) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 64,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Custom editor stylesheet for tight WYSIWYG parity.
	add_editor_style( 'assets/css/editor.css' );

	// Image sizes used across patterns.
	add_image_size( 'creatifriends-hero',      1920, 1080, true );
	add_image_size( 'creatifriends-portfolio', 1200, 900,  true );
	add_image_size( 'creatifriends-square',    800,  800,  true );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'creatifriends' ),
		'footer'  => __( 'Footer Navigation', 'creatifriends' ),
		'social'  => __( 'Social Links', 'creatifriends' ),
	) );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

/**
 * Enqueue front-end styles.
 */
function enqueue_assets() {
	wp_enqueue_style(
		'creatifriends-style',
		get_stylesheet_uri(),
		array(),
		CREATIFRIENDS_VERSION
	);

	wp_enqueue_style(
		'creatifriends-app',
		get_theme_file_uri( 'assets/css/app.css' ),
		array( 'creatifriends-style' ),
		CREATIFRIENDS_VERSION
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );

/**
 * Register custom block style variations.
 */
function register_block_styles() {
	register_block_style( 'core/button', array(
		'name'  => 'outline-pill',
		'label' => __( 'Outline Pill', 'creatifriends' ),
	) );

	register_block_style( 'core/button', array(
		'name'  => 'ghost',
		'label' => __( 'Ghost', 'creatifriends' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'card',
		'label' => __( 'Card', 'creatifriends' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'card-dark',
		'label' => __( 'Card (Dark)', 'creatifriends' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'glow-panel',
		'label' => __( 'Glow Panel', 'creatifriends' ),
	) );

	register_block_style( 'core/image', array(
		'name'  => 'rounded-xl',
		'label' => __( 'Rounded XL', 'creatifriends' ),
	) );

	register_block_style( 'core/image', array(
		'name'  => 'tilted',
		'label' => __( 'Tilted', 'creatifriends' ),
	) );

	register_block_style( 'core/separator', array(
		'name'  => 'gradient',
		'label' => __( 'Gradient', 'creatifriends' ),
	) );

	register_block_style( 'core/heading', array(
		'name'  => 'gradient-text',
		'label' => __( 'Gradient Text', 'creatifriends' ),
	) );

	register_block_style( 'core/list', array(
		'name'  => 'check-list',
		'label' => __( 'Check List', 'creatifriends' ),
	) );
}
add_action( 'init', __NAMESPACE__ . '\\register_block_styles' );

/**
 * Register block pattern categories so our patterns are nicely grouped.
 */
function register_pattern_categories() {
	register_block_pattern_category( 'creatifriends-hero', array(
		'label'       => __( 'CreatiFriends · Hero', 'creatifriends' ),
		'description' => __( 'Hero sections for landing pages.', 'creatifriends' ),
	) );
	register_block_pattern_category( 'creatifriends-services', array(
		'label'       => __( 'CreatiFriends · Services', 'creatifriends' ),
		'description' => __( 'Service grids and feature blocks.', 'creatifriends' ),
	) );
	register_block_pattern_category( 'creatifriends-portfolio', array(
		'label'       => __( 'CreatiFriends · Portfolio', 'creatifriends' ),
		'description' => __( 'Case study and portfolio layouts.', 'creatifriends' ),
	) );
	register_block_pattern_category( 'creatifriends-cta', array(
		'label'       => __( 'CreatiFriends · CTA', 'creatifriends' ),
		'description' => __( 'Calls to action.', 'creatifriends' ),
	) );
	register_block_pattern_category( 'creatifriends-testimonial', array(
		'label'       => __( 'CreatiFriends · Testimonials', 'creatifriends' ),
		'description' => __( 'Testimonials and social proof.', 'creatifriends' ),
	) );
	register_block_pattern_category( 'creatifriends-team', array(
		'label'       => __( 'CreatiFriends · Team', 'creatifriends' ),
		'description' => __( 'Team members and culture.', 'creatifriends' ),
	) );
}
add_action( 'init', __NAMESPACE__ . '\\register_pattern_categories' );

/**
 * Tweak excerpt length for cleaner cards.
 */
function excerpt_length() {
	return 22;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\excerpt_length', 999 );

function excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', __NAMESPACE__ . '\\excerpt_more' );
