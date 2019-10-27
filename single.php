<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col col-12">
      <div class="row">
        <?php if(has_nav_menu('side_nav')): ?>
               <div class="col-3">
                   <div class="card h-100">
                       <?php wp_nav_menu( array(
                           'theme_location' => 'side_nav',
                           'menu_class' => 'list-group list-group-flush',
                           'container' => '',
                           'menu_id' => 'sideNav'
                       )); ?>
                   </div>
               </div>
           <?php endif; ?>
          <?php if(have_posts()): ?>
          <?php while (have_posts()): the_post();  ?>
          <div class="col-9">
            <p><?php the_title(); ?></p>

            <div class="card-body">
              <div class="row">
                  <?php if(has_post_thumbnail()): ?>
                      <?php if( is_home() ): ?>
                          <div class="col-12 col-md-3">
                              <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                          </div>
                      <?php else: ?>
                          <div class="col-12 text-center mb-5">
                              <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                          </div>
                      <?php endif; ?>
                  <?php endif; ?>
                  <div class="col">
                      <div>
                          <?php if( is_home() ): ?>
                              <?php the_excerpt() ; ?>
                          <?php else: ?>
                              <?php the_content(); ?>
                          <?php endif; ?>
                      </div>
                      <?php if( !is_singular() ): ?>
                          <a href="<?php the_permalink(); ?>" class="btn btn-primary">Order</a>
                      <?php endif; ?>
                  </div>
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
