<footer>
  <div class="container">
    <?php wp_nav_menu( array( 'theme_location' => 'menu1','container' => 'div',// wraps menu in <div> tags
      'container_class' => 'footerlinks', //class name of container div
      ) ); ?>
      <div class="copyright">
        <p>feito com <3</p>
      </div>
      
      <div class="footersocial">
        <ul>
          <li><a href="https://pt-br.facebook.com/mozillabrasil" target="_blank"><span class="icon-social-facebook"></span></a></li>
          <li><a href="https://twitter.com/mozillabrasil" target="_blank"><span class="icon-social-twitter"></span></a></li>
          <li><a href="https://www.flickr.com/groups/mozillabrasil/" target="_blank"><span class="icon-social-camera"></span></a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.nicescroll.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.feeds.min.js"></script>
  
  <script src="<?php bloginfo('template_directory'); ?>/js/fn.js"></script>
</body>
</html>