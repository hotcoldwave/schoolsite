
<nav class="navbar navbar-expand-md navbar-light bg-light shadow" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e(
      "Toggle navigation",
      "your-theme-slug"
    ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <?php wp_nav_menu([
          "theme_location" => "top-menu",
          "depth" => 3,
          "container" => "div",
          "container_class" =>
            "collapse navbar-collapse",
          "container_id" => "bs-example-navbar-collapse-1",
          "menu_class" => "nav navbar-nav",
          "fallback_cb" => "WP_Bootstrap_Navwalker::fallback",
          "walker" => new WP_Bootstrap_Navwalker(),
        ]); ?>
</nav>