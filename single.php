<?php get_header(); ?>

<section id="detail" class="container">
	<?php while ( have_posts() ) : the_post(); ?>
	<article class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

		<div class="sectionhead">
			<h1><?php the_title(); ?></h1>
			<hr class="separetor">
		</div>

		<div class="wow">
			<ul class="meta list-inline">
				<li class="date"><p><span class="icon-calendar"></span> <?php the_date(); ?></p></li>
				<li><?php echo getPostLikeLink( get_the_ID() ); ?></li>
				<li class="comment"><a href="<?php comments_link(); ?>"><span class="icon-bubbles"></span> <?php comments_number( __( 'Comentar', 'womoz' ), __( '1 Comentário', 'womoz' ), __( '% Comentários', 'womoz' ) ); ?></a></li>
			</ul>
			<?php the_content(); ?>

			<div class="social_links">

		      <a href="https://twitter.com/share" class="twitter-share-button" data-via="womoz.mozillabrasil" data-related="mozillabrasil" data-hashtags="womoz">Tweet</a> 
		      <script>
		      		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
		      		if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
		      		fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
		      </script>

		      <div class="fb-share-button" data-href="<?php echo get_permalink();?>" data-layout="button_count"></div>
		      <div id="fb-root"></div>
		      <script>
		      	(function(d, s, id) {
		        var js, fjs = d.getElementsByTagName(s)[0];
		        if (d.getElementById(id)) return;
		        js = d.createElement(s); js.id = id;
		        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId={APPID-DA-WOMOZ}";
		        fjs.parentNode.insertBefore(js, fjs);
		      }(document, 'script', 'facebook-jssdk'));
		      </script>

		    </div>
		    </div>
			</div>
		</div>

		<?php comments_template( '', true ); ?>

		<?php endwhile; ?>
	</article>

	<?php get_sidebar(); ?>

</section>


<?php get_footer(); ?>