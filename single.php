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
				<li class="comment"><a href="#"><span class="icon-bubbles"></span> 15 Comentários</a></li>
			</ul>
			<?php the_content(); ?>
		</div>

		<?php endwhile; ?>
	</article>

	<?php get_sidebar(); ?>

</section>


<?php get_footer(); ?>