<?php get_header(); ?>

<section id="detail" class="container">
	<article class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
		<div class="sectionhead">
			<h1><?php _e( 'Novidades do WoMoz', 'womoz' ); ?></h1>
			<hr class="separetor">
		</div>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="wow">
			<div class="title">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<ul class="meta list-inline">
				<li class="date"><p><span class="icon-calendar"></span> <?php the_date(); ?></p></li>
				<li class="comment"><a href="<?php comments_link(); ?>"><span class="icon-bubbles"></span> <?php comments_number( __( 'Comentar', 'womoz' ), __( '1 Comentário', 'womoz' ), __( '% Comentários', 'womoz' ) ); ?></a></li>
			</ul>
			<?php the_excerpt(); ?>
		</div>

		<hr>
		<?php endwhile; ?>

	</article>


	<?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>