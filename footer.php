  <?php if(has_nav_menu('footer_navigation')): ?>
<footer>
    <nav class="navbar mb-0 bg-dark tex-white">
        <?php
        wp_nav_menu( array( 'theme_location' => 'footer_navigation' ) );
        ?>
    </nav>
</footer>
<?php endif; ?>
  <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
<?php wp_footer(); ?>
</body>
</html>
