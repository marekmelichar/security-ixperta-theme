<?php

define( 'THEME_DIRECTORY', get_template_directory() );

/**
 * Theme Support and Site Settings
 */
require_once THEME_DIRECTORY . '/inc/site-settings.php';

/**
 * Scripts and Styles
 */
require_once THEME_DIRECTORY . '/inc/enqueue-scripts.php';

/**
 * Cleanup WordPress and Reorder menus
 */
require_once THEME_DIRECTORY . '/inc/cleanup-reorder.php';

/**
 * Hide the main content editor if not necessary
 */
require_once THEME_DIRECTORY . '/inc/hide-the-editor.php';

/**
 * Register Sidebars
 */
// require_once THEME_DIRECTORY . '/inc/sidebars-widgets.php';

/**
 * Shortcodes
 */
require_once THEME_DIRECTORY . '/inc/shortcode_get_post.php';

/**
 * Customizer
 */
require_once THEME_DIRECTORY . '/inc/customizer.php';

/**
 * Theme Options Page
 */
// require_once THEME_DIRECTORY . '/inc/theme-options-page.php';


// require_once THEME_DIRECTORY . '/inc/template-functions.php';
// require_once THEME_DIRECTORY . '/inc/template-tags.php';




if ( ! function_exists( 'log_me' ) ) :
	/**
	 * Simple error logging
	 *
	 * @param $message
	 * @return bool
	 */
	function log_me( $message )
	{
		if ( true !== WP_DEBUG ) return false;

		if ( is_array($message) || is_object($message) ) {
			return error_log( json_encode($message) );
		}

		return error_log( $message );
	}

endif;


if ( ! function_exists( 'extend_array' ) ) :

	/**
	 * jQuery style array extend
	 *
	 * @return array
	 */
	function extend_array()
	{
		$args     = func_get_args();
		$extended = array();

		if ( is_array( $args ) && count( $args ) )
		{
			foreach ( $args as $array )
			{
				if ( ! is_array( $array ) )	continue;
				$extended = array_merge( $extended, $array );
			}
		}

		return $extended;
	}

endif;



/**
 * ACF PRO Options Page
 * Global OPTIONS
 * HEADER & FOOTER
 *
 *
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Help Widget Settings',
		'menu_title'	=> 'Help Widget',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Global Strings',
		'menu_title'	=> 'Global Strings',
		'parent_slug'	=> 'theme-general-settings',
	));

}






// OPTIONALLY CAN USE ICONS IN SHORTCODE :

function ikona_facebook() {
  ob_start();
  get_template_part('svg/ikona_facebook.svg');
  return ob_get_clean();
}
add_shortcode('ikona_facebook', 'ikona_facebook');



function ikona_linkedin() {
  ob_start();
  get_template_part('svg/ikona_linkedin.svg');
  return ob_get_clean();
}
add_shortcode('ikona_linkedin', 'ikona_linkedin');



function ikona_youtube() {
  ob_start();
  get_template_part('svg/ikona_youtube.svg');
  return ob_get_clean();
}
add_shortcode('ikona_youtube', 'ikona_youtube');



function homepage_industrial_vision_logo() {
  ob_start();
  get_template_part('svg/homepage_industrial_vision_logo.svg');
  return ob_get_clean();
}
add_shortcode('homepage_industrial_vision_logo', 'homepage_industrial_vision_logo');



function homepage_xevoq_logo() {
  ob_start();
  get_template_part('svg/homepage_xevoq_logo.svg');
  return ob_get_clean();
}
add_shortcode('homepage_xevoq_logo', 'homepage_xevoq_logo');

function logo_ixperta_bile() {
  ob_start();
  get_template_part('svg/logo_ixperta_bile.svg');
  return ob_get_clean();
}
add_shortcode('logo_ixperta_bile', 'logo_ixperta_bile');







// no auto paragraphs
// remove_filter( 'the_content', 'wpautop' );






// extend the theme with career - theme-01
// require('theme-01/functions.php');








// function language_selector_flags(){
//     $languages = icl_get_languages('skip_missing=0&orderby=code');
//     if(!empty($languages)){
//         foreach($languages as $l){
//             if(!$l['active']) echo '<a href="'.$l['url'].'">';
//             echo '<img src="'.$l['country_flag_url'].'" height="15" alt="'.$l['language_code'].'" width="23" />';
//             if(!$l['active']) echo '</a>';
//         }
//     }
// }













// ACF PRO BLOCKS for Gutenberg :



// How it works block

add_action('acf/init', 'how_it_works_acf_init');
function how_it_works_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'how-it-works',
			'title'				=> __('How it works'),
			'description'		=> __('How it works block.'),
			'render_callback'	=> 'howitworks_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'how it works', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function howitworks_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}









// Little call to action block

add_action('acf/init', 'little_call_to_action_acf_init');
function little_call_to_action_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'little-call-to-action',
			'title'				=> __('Little call to action'),
			'description'		=> __('Little call to action block.'),
			'render_callback'	=> 'little_cta_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Little call to action', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function little_cta_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}














// Two gray green columns - block

add_action('acf/init', 'two_gray_green_columns_acf_init');
function two_gray_green_columns_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'two-gray-green-columns',
			'title'				=> __('Two gray green columns'),
			'description'		=> __('Two gray green columns block.'),
			'render_callback'	=> 'two_gray_green_columns_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Two gray green columns', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function two_gray_green_columns_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}














// Icon content dotted border - block

add_action('acf/init', 'icon_content_dotted_border_acf_init');
function icon_content_dotted_border_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'icon-content-dotted-border',
			'title'				=> __('Icon content dotted border'),
			'description'		=> __('Icon content dotted border block.'),
			'render_callback'	=> 'icon_content_dotted_border_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Icon content dotted border', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function icon_content_dotted_border_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}





















// Reference page full - stripe with tags

add_action('acf/init', 'stripe_with_tags_ref_full');
function stripe_with_tags_ref_full() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'stripe-with-tags',
			'title'				=> __('Stripe with tags'),
			'description'		=> __('Stripe with tags block.'),
			'render_callback'	=> 'stripe_with_tags_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Stripe with tags', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function stripe_with_tags_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}













// Reference page full - stripe with solutions

add_action('acf/init', 'stripe_with_solutions_ref_full');
function stripe_with_solutions_ref_full() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'stripe-with-solutions',
			'title'				=> __('Stripe with solutions'),
			'description'		=> __('Stripe with solutions block.'),
			'render_callback'	=> 'stripe_with_solutions_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Stripe with solutions', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function stripe_with_solutions_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}















// Reference page full - personal reference

add_action('acf/init', 'personal_reference_ref_full');
function personal_reference_ref_full() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'personal-reference',
			'title'				=> __('Stripe Personal reference'),
			'description'		=> __('Personal reference block.'),
			'render_callback'	=> 'personal_reference_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Personal reference', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function personal_reference_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}


















// Create Custom Post Type = "Reference"


function create_posttype_reference() {
  register_post_type( 'reference',
    array(
      'labels' => array(
        'name' => __( 'References' ),
        'singular_name' => __( 'Reference' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'reference'),
			'supports' => array('title', 'editor'),
			'taxonomies' => array('category', 'post_tag'),
			'can_export' => true,
			'show_in_rest' => true,
			'rest_base' => 'reference'
    )
  );
}
add_action( 'init', 'create_posttype_reference' );




// Make sure we get the tags for Custom Post Type = "Reference"

function wpa_cpt_tags( $query ) {
    if ( $query->is_tag() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'reference' ) );
    }
}
add_action( 'pre_get_posts', 'wpa_cpt_tags' );



















function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

















function show_tags($post_object) {

  $post_tags = get_the_tags($post_object);

  if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
      $out .= '<a href="/tag/'.$tag->slug.'">' . $tag->name . '</a>';
    }
  }

  return trim($out);

}



















require_once THEME_DIRECTORY . '/template-blocks/register-block/custom-heading.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/reference-banner.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/custom-section.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/personal-testimonial.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/page-L3-banner.php';