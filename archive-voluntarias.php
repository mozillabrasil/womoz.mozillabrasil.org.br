<?php get_header(); ?>

<section id="team">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sectionhead">
				<h3><?php _e( 'O Grupo', 'womoz' ); ?></h3>
				<h4><?php _e( 'Conheça as pessoas do time WoMoz Brasil', 'womoz' ); ?></h4>
				<hr class="separetor">
			</div>
		</div>

		<?php if( have_posts() ): ?>

		<div class="portfolioitems container">
			<ul id="shotsByPlayerId">
				<?php while( have_posts() ) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php if( has_post_thumbnail() ): ?>
								<figure>
									<?php the_post_thumbnail('323-243'); ?>
									<figcaption><h2><?php the_title(); ?></h2></figcaption>
								</figure>
							<?php else: ?>
								<figure>
									<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php echo get_template_directory(); ?>/assets/img/womoz-brasil.jpg">
									<figcaption><h2><?php the_title(); ?></h2></figcaption>
								</figure>
							<?php endif; ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>

		<?php else: ?>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p><?php _e( 'Por enquanto não há nenhuma voluntária cadastrada. :(', 'womoz' ); ?></p>
		</div>

		<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>