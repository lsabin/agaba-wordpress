<?php

/** 
*
* Liquorice Theme functions
*
**/

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
  $content_width  = '670';


/**
* Add Menu Support
**/

add_theme_support('menus');
add_theme_support('automatic-feed-links');
register_nav_menu('main', 'Main Nav');


/**
* Add custom background 
**/

add_custom_background(); 


/**
* Add editor style
**/
add_editor_style(); 


/**
* Thumbnail support
**/
add_theme_support( 'post-thumbnails' );  
set_post_thumbnail_size( 670, 370, true ); // 670 pixels wide by ??? pixels tall, hard crop mode
// Permalink thumbnail size

if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 


/**
* register_sidebar()
*
*@desc Registers the markup to display in and around a widget
*/
if ( function_exists('register_sidebar') )
{
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '',
    'after_title' => '',
  ));
}

/**
* Check to see if this page will paginate
* 
* @return boolean
*/
function will_paginate() 
{
  global $wp_query;
  
  if ( !is_singular() ) 
  {
    $max_num_pages = $wp_query->max_num_pages;
    
    if ( $max_num_pages > 1 ) 
    {
      return true;
    }
  }
  return false;
}


/**
* Borra los p en el contenido 
*/
function remove_wpautop_content_filter() {
  remove_filter('the_content','wpautop');
}


/**
* Load the Theme Options Page that lets users control the social media icons at the top
*/
require_once ( get_template_directory() . '/inc/theme-options.php' );


function add_script_sharre() {
    wp_enqueue_script(
      'sharre', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/jquery.sharrre-1.3.5.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}



function add_script_social() {
    wp_enqueue_script(
      'social', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/inserta-social.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}

function add_script_menu() {
    wp_enqueue_script(
      'menu', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/menu.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}


function add_script_supersubs() {
    wp_enqueue_script(
      'hoverIntent', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/hoverIntent.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );


    wp_enqueue_script(
      'superfish', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/superfish.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );


    wp_enqueue_script(
      'supersubs', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/supersubs.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );

}


function add_script_bootstrap() {
    wp_enqueue_script(
      'bootstrap', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/bootstrap.min.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}


function add_script_imageslider() {
    wp_enqueue_script(
      'image-slider', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/js-image-slider.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}

function add_script_contenthover() {
    wp_enqueue_script(
      'contenthover', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/jquery.contenthover.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}


function add_script_contenthover_campeonatos() {
    wp_enqueue_script(
      'contenthover-campeonatos', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/contenthover-campeonatos.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}



function add_script_junta() {
    wp_enqueue_script(
      'junta', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/junta.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}


function add_script_gallery() {
    wp_enqueue_script(
      'ad-gallery', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/jquery.ad-gallery.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}

function add_script_fancybox() {
    wp_enqueue_script(
      'fancybox', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/jquery.fancybox.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}


function add_script_gallery_start() {
    wp_enqueue_script(
      'gallery-start', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/gallery-start.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}


function add_script_fancybox_start() {
    wp_enqueue_script(
      'fancybox-start', // name your script so that you can attach other scripts and de-register, etc.
      get_template_directory_uri() . '/js/fancybox-start.js', // this is the location of your script file
      array('jquery') // this array lists the scripts upon which your script depends
  );
}

/*add_action( 'wp_enqueue_scripts', 'add_script_sharre' );
add_action( 'wp_enqueue_scripts', 'add_script_menu' );
add_action( 'wp_enqueue_scripts', 'add_script_social' );
*/


add_action('template_redirect', 'inheritParentTemplate');
 
function inheritParentTemplate() {
    if (is_category()) {
        $catid = get_query_var('cat'); //current category id
        $category = get_category($catid);
        $parent = $category->category_parent; //immediate parent
        if ($parent){
            $parentCategory = get_category($parent);
            if("stores"==$parentCategory->name){
                if ( file_exists(TEMPLATEPATH . '/category-' . $parentCategory->slug . '.php') ) {
                    include (TEMPLATEPATH . '/category-' . $parentCategory->slug . '.php');
                }
                return true;
            }
        }
    }
}



?>