<?php get_header(); ?>
<?php if (!is_home()): ?>
 <div class="container">
   <div class="row">
     <?php if(has_nav_menu('side_navigation')): ?>
            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side_navigation',
                        'menu_class' => 'list-group list-group-flush',
                        'container' => '',
                        'menu_id' => 'sideNav'
                    )); ?>
                </div>
            </div>
        <?php endif; ?>
   </div>
   <div class="col h-100">
     <?php if (have_posts()): ?>
       <?php while (have_posts()): the_post('menu');  ?>
         <article class="post">
           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
           <div class="thumbnail-img"><?php the_post_thumbnail(); ?>
           </div>
           <?php the_content(); ?>
         </article>
       <?php endwhile; ?>
     <?php else : ?>
       <?php echo '404' ?>
     <?php endif; ?>
   </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
