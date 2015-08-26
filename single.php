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
		</div>

		<?php comments_template( '', true ); ?>

		<?php endwhile; ?>
	</article>

	<?php get_sidebar(); ?>

</section>


<?php get_footer(); ?>