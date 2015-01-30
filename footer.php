    <!-- footer -->
    <footer>
      <div class="container">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-menu',
            'container' => 'div',
            'container_class' => 'footerlinks',
          )
        );
        ?>
        <div class="copyright">
          <p><?php _e( 'feito com <3', 'womoz' ); ?></p>
        </div>

        <?php if ( is_active_sidebar( 'rodape-social' ) ) : ?>
        	<?php dynamic_sidebar( 'rodape-social' ); ?>
        <?php endif; ?>
      </div>
    </footer>
    <!-- //footer -->

    <!-- JS -->
    <?php wp_footer(); ?>
  </body>
</html>