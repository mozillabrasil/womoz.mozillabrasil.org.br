<?php get_header(); ?>

<section id="detail" class="container">
	<?php while ( have_posts() ) : the_post(); ?>
	<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="sectionhead">
			<h1><?php the_title(); ?></h1>
			<h4><?php echo rwmb_meta( 'womoz_page_subtitle' ); ?></h4>
			<hr class="separetor">
		</div>

		<div class="addthis">

		</div>

		<?php if( has_post_thumbnail() ): ?>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); ?>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<?php the_content(); ?>
			</div>
		</div>

		<?php else: ?>

			<?php the_content(); ?>

		<?php endif; ?>
	</article>
	<?php endwhile; ?>
</section>


<?php get_footer(); ?>