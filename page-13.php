<?php get_header(); ?>

  <div class="row">
    <div class="col col-2 bg-warning text-center">
        <h1 class="h4 my-2">ABOUT</h1>
    </div>
    <div class="col col-10 px-5 aboutBg">
      <?php if(have_posts()): ?>
      <?php while (have_posts()): the_post();  ?>
          <p><?php the_content(); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
