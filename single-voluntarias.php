<?php get_header(); ?>

<section id="project">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sectionhead">
					<h3><?php _e( 'O Grupo', 'womoz' ); ?></h3>
					<h4><?php _e( 'Conheça algumas voluntárias do WoMoz', 'womoz' ); ?></h4>
					<hr class="separetor">
				</div>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php if( has_post_thumbnail() ) {
					the_post_thumbnail('full', array('class' => 'img-responsive') );
				} else {
					echo '<img class="img-responsive" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/project-thumbnail-default.jpg" alt="'.the_title().'" />';
				} ?>
				<div class="quote">
					<blockquote>
						<?php the_excerpt(); ?>
					</blockquote>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<h4><?php the_title(); ?></h4>
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>