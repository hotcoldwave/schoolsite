<?php

// Load Stylesheets
function load_css()
{
  wp_register_style(
    "bootstrap",
    get_template_directory_uri() . "/css/bootstrap.min.css",
    [],
    false,
    "all"
  );
  wp_enqueue_style("bootstrap");

  wp_register_style(
    "main",
    get_template_directory_uri() . "/css/main.css",
    [],
    false,
    "all"
  );

  wp_enqueue_style("main");
}

add_action("wp_enqueue_scripts", "load_css");

//  Load JS
function load_js()
{
  wp_enqueue_script("jquery");
  wp_register_script(
    "bootstrap",
    get_template_directory_uri() . "/js/bootstrap.min.js",
    "jquery",
    false,
    true
  );
  wp_enqueue_script("bootstrap");
}

add_action("wp_enqueue_scripts", "load_js");

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
