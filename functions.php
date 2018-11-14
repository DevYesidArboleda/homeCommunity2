<?php
/**
 * ixdamedellin Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage ixda
 * @since 1.0.0
 * @version 1.0.0
 */

if ( !function_exists( 'ixda_scripts' ) ):
    function ixda_scripts () {
      wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700', array(), '1.0.0', 'all' );
      wp_register_style( 'style', get_template_directory_uri(), array(), '1.0.0', 'all' );
      wp_enqueue_style( 'google-fonts' );
      wp_enqueue_style( 'style' );
      
    }
  endif;


  if ( !function_exists( 'mawt_setup' ) ):
    function mawt_setup () {
      //Soporte para traducciones
        //https://developer.wordpress.org/themes/functionality/internationalization/
        //https://make.wordpress.org/polyglots/handbook/
      //Herramientas
        //https://www.icanlocalize.com/tools/php_scanner
        //https://poedit.net/
      load_theme_textdomain( 'mawt', get_template_directory() . '/languages' );
      //https://developer.wordpress.org/reference/functions/add_theme_support/
      add_theme_support( 'post-thumbnails' );
      //add_image_size( name, width, height, crop );
      add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
      ));
    }
  endif;

  ?>