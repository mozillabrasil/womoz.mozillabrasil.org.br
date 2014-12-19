    <!-- footer -->
    <footer>
      <div class="container">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu1',
            'container' => 'div',
            'container_class' => 'footerlinks',
          )
        );
        ?>
        <div class="copyright">
          <p><?php _e( 'feito com <3', 'womoz' ); ?></p>
        </div>

        <div class="footersocial">
          <ul>
            <li><a title="Facebook" href="https://pt-br.facebook.com/mozillabrasil" target="_blank"><span class="icon-social-facebook"></span></a></li>
            <li><a title="Twitter" href="https://twitter.com/mozillabrasil" target="_blank"><span class="icon-social-twitter"></span></a></li>
            <li><a title="Flickr" href="https://www.flickr.com/groups/mozillabrasil/" target="_blank"><span class="icon-camera"></span></a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- //footer -->

    <!-- JS -->
    <?php wp_footer(); ?>
  </body>
</html>