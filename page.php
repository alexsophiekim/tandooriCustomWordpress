<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col">
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
          <h5 class="h1"><?php the_title(); ?></h5>
           <p class="text-center"><?php the_content(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
    <?php if(has_nav_menu('side_navigation')): ?>
        <div class="col-12 col-md-3">
            <div class="card h-100 mb-2 mt-2 p-2">
                <?php wp_nav_menu(array(
                    'theme-location' => 'side_navigation',
                    'menu_class' => 'list-group list-group-flush',
                    'container' => '',
                    'menu_id' => 'sideNav'
                )); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
