<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand flex" href="<?php bloginfo('url'); ?>">
          <?php if ( function_exists( 'the_custom_logo' ) ): ?>
          <?php  the_custom_logo(); ?>
            <?php else: ?>
              <?php echo get_bloginfo('name'); ?>
          <?php endif; ?>
        </a>
          <?php
          wp_nav_menu( array(
              'theme_location'    => 'top_nav',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
        </div>
    </nav>
