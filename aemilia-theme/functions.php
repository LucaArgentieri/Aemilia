<?php

/**
 * functions.php is the file where you can control all the logics behind your website
 * You can even change how WordPress works because this file is called very early in the process of building the pages
 *
 * @since 1.0.0
 * @version 1.0.0
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */

define('WTD_VERSION', (WTD_IS_STAGING ? time() : '1.0.0'));

define('WTD_IS_ADMIN', current_user_can('edit_others_posts'));

/**
 * whenever you see an add_action( 'moment', 'nameofthefunction' ) call it means we want to add a function with the name 'nameofthefunction' to the list of things to do in that 'moment'
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 */

/**
 * This function takes care of all the setup and functionalities that should be added to your theme
 */
function wtd_setup()
{
	/**
	 * add_theme_support will be used to add some functionalities
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
	 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
	 */
	add_theme_support('post-thumbnails');

	add_theme_support('title-tag');

	add_theme_support('wp-block-styles');

	add_theme_support('align-wide');

    add_theme_support('responsive-embeds');
    
    
	register_nav_menus(array('main_menu' => 'Main Menu'));
	register_nav_menus(array('footer_menu' => 'Footer Menu'));

}
add_action('after_setup_theme', 'wtd_setup');

// function wpthemedev_widgets_registration(){
    
//     register_sidebar([
//         'name' => 'Footer',
//         'id' => 'footer',
//         'before_widget' => '',
//         'after_widget' => '',
//         'before_title' => '<h3>',
//         'after_title' => '</h3>',
// 	]);
	
// 	register_sidebar([
//         'name' => 'Commenti',
//         'id' => 'commenti',
//         'before_widget' => '',
//         'after_widget' => '',
//         'before_title' => '<h3>',
//         'after_title' => '</h3>',
// 	]);

    
// }
// add_action( 'widgets_init', 'wpthemedev_widgets_registration' );


/**
 * enqueue scripts and styles the way WordPress wants them to be
 * 
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function wtd_styles_scripts()
{	
	// enqueue our style.css file
	wp_enqueue_style('wtd-reset', get_stylesheet_directory_uri() . '/style.css', array(), WTD_VERSION, 'all');
	wp_enqueue_style('wtd-style', WTD_INCLUDES . 'css/style.css', array('wtd-reset'), WTD_VERSION, 'all');
	wp_enqueue_style('wtd-style_lightbox', WTD_INCLUDES . 'dist/css/lightbox.css', array('wtd-reset'), WTD_VERSION, 'all');
	wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	// change the jquery version
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '1.0.0', true);
	wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0.0', true);
	wp_enqueue_script('lightbox', WTD_INCLUDES . 'dist/js/lightbox.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wtd_styles_scripts');

/**
 * Remove the default emoji styles slowing down the website
 *
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Aemilia Custom Settings',
		'menu_title'	=> 'Aemilia Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
/* REVERSE THE ORDER OF THE POSTS BEGINNING WITH THE OLDEST ONE */

function order_posts_by_date( $query ) { 
 
	  $query->set( 'orderby', 'date' ); 
 
	  $query->set( 'order', 'ASC' ); 
 
 } 
 
 add_action( 'pre_get_posts', 'order_posts_by_date' );

// ADD LAYGRIDDER IMAGE FILTER (ADDING LIGHTBOX AND AOS DATA-ATTRIBUTES)

 function aos_plus_lightbox_images_filter($markup, $element){
	 $attid = $element->attid;
	 $alt = get_post_meta($attid, '_wp_attachment_image_alt', true);
 
	 return
	 '<div class="lg-placeholder" data-aos="fade-up" style="padding-bottom:'.($element->h/$element->w*100).'%;">
	 <a href="'.get_site_url().$element->sizes->full->url.'" data-lightbox="img">
		 <img src="'.get_site_url().$element->sizes->full->url.'" alt="'.$alt.'">
	 </a> 
	 </div>';
 }
 add_filter( 'lg_frontend_img', 'aos_plus_lightbox_images_filter', 10, 2 );


