<?php get_header(); ?>

<section class="projetos" id="project">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sectionhead">
				<h3><?php _e( 'Projetos do WoMoz', 'womoz' ); ?></h3>
				<hr class="separetor">
			</div>
		</div>

		<?php if( have_posts() ):

			while( have_posts() ) : the_post(); ?>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<?php if( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail');
				} else {
					echo '<img class="img-responsive" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/project-thumbnail-default.jpg" alt="Projetos do WoMoz" />';
				} ?>
				<h4><?php the_title(); ?></h4>
				<?php the_excerpt(); ?>
			</div>

		<?php endwhile; else: ?>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p><?php _e( 'Por enquanto não há nenhum projeto em desenvolvimento. :(', 'womoz' ); ?></p>
		</div>

		<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>