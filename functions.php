<?php


// Setup Carbon Fields

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
    Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->add_fields( array(
            Field::make( 'complex', 'crb_documents', 'Документы' )
            	->set_layout( 'tabbed-horizontal' )
            	->add_fields( array(
            		Field::make( 'text', 'doc-title', 'Название документа' ),
            		Field::make( 'file', 'doc-file', 'Файл'),
            	) ),
        ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( ABSPATH . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


// Load Stylesheets

function load_css()
{
  wp_register_style(
    "main",
    get_template_directory_uri() . "/build/css/main.css",
    [],
    microtime(),
    "all"
  );

  wp_enqueue_style("main");
}

add_action("wp_enqueue_scripts", "load_css");

// Load JS

function load_js()
{
  wp_enqueue_script("jquery");
  wp_register_script(
    "bootstrap-components",
    get_template_directory_uri() . "/build/js/bundle.js",
    "jquery",
    microtime(),
    true
  );
  wp_enqueue_script("bootstrap-components");
}

add_action("wp_enqueue_scripts", "load_js");

// Load features

function school_features()
{
  add_theme_support("title-tag");
}
add_action("after_setup_theme", "school_features");

// Theme options

add_theme_support("menus");
add_theme_support("post-thumbnails");
add_theme_support("widgets");

//Menus

register_nav_menus([
  "top-menu" => "Top Menu Location",
  "mobile-menu" => "Mobile Menu Location",
]);

// Custom image sizes

add_image_size("blog-large", 800, 400, false);
add_image_size("blog-small", 300, 200, true);

// Register Sidebars

function my_sidebars()
{
  register_sidebar([
    "name" => "Page Sidebar",
    "id" => "page-sidebar",
    "before_title" => '<h4 class="widget-title">',
    "after_title" => "</h4>",
  ]);

  register_sidebar([
    "name" => "Blog Sidebar",
    "id" => "blog-sidebar",
    "before_title" => '<h4 class="widget-title">',
    "after_title" => "</h4>",
  ]);
}
add_action("widgets_init", "my_sidebars");

// Register Custom Navigation Walker

function register_navwalker()
{
  require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";
}
add_action("after_setup_theme", "register_navwalker");
