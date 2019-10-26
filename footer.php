  <?php if(has_nav_menu('footer_navigation')): ?>
<footer>
    <nav class="navbar mb-0 bg-dark tex-white">
        <?php
          wp_nav_menu( array( 'theme_location' => 'footer_navigation' ) );
        ?>
    </nav>
</footer>
<?php endif; ?>
<div class="bg-dark text-white mb-0">
  <p class="text-center"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
<?php wp_footer(); ?>
</div>

</body>
</html>
