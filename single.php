<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col col-2">
        <h1 class="h4 welcome90">ABOUT</h1>
    </div>
    <div class="col col-10">
      <div class="row">
          <?php if(have_posts()): ?>
          <?php while (have_posts()): the_post();  ?>
          <div class="col-3">
            <?php if (has_post_thumbnail()): ?>
              <div class="card" style="width: 10rem;">
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php endif; ?>
                <div class="card-body">
                  <p class="card-text"><?php the_content(); ?></p>
                  <?php if(!is_singular() ): ?>
                      <button class="btn btn-primary btn-block">ORDER</button>
                  <?php endif; ?>
                </div>
              </div>

          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <hr>
    </div>
  </div>

</div>

<?php get_footer(); ?>
