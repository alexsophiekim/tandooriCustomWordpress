<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col col-2">
        <h1 class="h4 welcome90">ABOUT</h1>
    </div>
    <div class="col col-10">
      <?php if(have_posts()): ?>
      <?php while (have_posts()): the_post();  ?>
          <p><?php the_content(); ?></p>
          <hr>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
