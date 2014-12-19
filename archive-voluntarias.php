<?php get_header(); ?>

<section id="team">
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

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

					<div class="clientsphoto">
						<?php if( has_post_thumbnail() ): ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php else: ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="img-responsive" src=" <?php get_bloginfo( 'stylesheet_directory' ) ?>/assets/images/project-thumbnail-default.jpg" alt="<?php the_title(); ?>"></a>
						<?php endif; ?>
					</div>
					<div class="quote">
						<blockquote>
							<?php the_excerpt(); ?>
						</blockquote>
						<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
						<p>@fulana_x</p>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>