<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>

  <?php if(has_header_image()): ?>
      <div class="container-fluid p-0">
          <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>)  ;background-size: cover;">
            <div class="flex">
              <div class="logoBig">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
              </div>
              <h1 class="display-3 inline-block"><?php echo get_bloginfo('name'); ?></h1>
              <div class="btnSet text-center">
                <a href="index.php/about">
                <button class="btn btn-primary" type="button" name="button">ABOUT</button></a>
                <a href="index.php/menu"><button class="btn btn-secondary" type="button" name="button">MENU</button></a>
              </div>
            </div>

          </div>

      </div>

  <?php else: ?>
    <div class="container">
          <div class="row">
              <div class="col text-center">
                  <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
              </div>
          </div>
      </div>
  <?php endif; ?>


<?php get_footer(); ?>
