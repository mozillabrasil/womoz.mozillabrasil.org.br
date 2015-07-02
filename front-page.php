<?php get_header(); ?>

			<!-- related -->
			<div id="related">
				<div class="container">
					<div class="col-md-3">
						<h4><?php _e( 'Alguns projetos relacionados:', 'womoz' ); ?></h4>
					</div>
					<div class="col-md-9">
						<ul>
							<li><a href="https://webmaker.org" target="_blank" title="Webmaker"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/webmaker.png" alt="Webmaker"></a></li>
							<li><a href="https://www.mozilla.org/pt-BR/firefox/products/" target="_blank" title="Mozilla Firefox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/firefox.png" alt="Mozilla Firefox"></a></li>
							<li><a href="https://developer.mozilla.org/pt-BR/" target="_blank" title="MDN - Mozilla Developer Network"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mdn.png" alt="MDN - Mozilla Developer Network"></a></li>
						</ul>
					</div>
				</div>
				<hr>
			</div>
			<!-- //related -->

			<!-- about -->
			<div id="about" class="container">
				<?php $about = new WP_Query( array( 'pagename' => 'sobre', 'post_status' => 'publish' ) ); ?>
				<?php while ( $about->have_posts() ) : $about->the_post(); ?>
				<div class="col-md-6">
					<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); ?>
				</div>
				<div class="col-md-6">
					<div class="row wow">
						<h2 class="wow"><?php the_title(); ?></h2>
						<?php echo rwmb_meta( 'womoz_page_excerpt' ); ?>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<!-- //about -->

			<hr>

			<!-- projects -->
			<div id="project" class="container">
				<?php $projetos = new WP_Query( array( 'post_type' => 'projetos', 'post_status' => 'publish', 'posts_per_page' => '3', 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
				<div class="sectionhead row">
					<h1><?php _e( 'Projetos do WoMoz', 'womoz' ); ?></h1>
					<hr class="separetor">
				</div>

				<div class="row">
					<?php if( $projetos->have_posts() ): ?>

					<?php while ( $projetos->have_posts() ) : $projetos->the_post(); ?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<?php if( has_post_thumbnail() ) {
							the_post_thumbnail('thumbnail');
						} else {
							echo '<a href="'. the_permalink() .'"><img class="img-responsive" src="' . get_template_directory() . '/assets/img/womoz-brasil.jpg" alt="'.the_title().'" /></a>';
						} ?>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php the_excerpt(); ?>
					</div>
					<?php endwhile; ?>

					<?php else: ?>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p><?php _e( 'Por enquanto não há nenhum projeto em desenvolvimento. :(', 'womoz' ); ?></p>
					</div>

					<?php endif; ?>
				</div>
			</div>
			<!-- //projects -->

			<hr>

			<!-- news -->
			<div id="news">
				<?php $posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => '3' ) ); ?>
				<div class="sectionhead">
					<h1><?php _e( 'Novidades no Brasil', 'womoz' ); ?></h1>
					<hr class="separetor">
				</div>

				<div class="portfolioitems container">
				<?php if( $posts->have_posts() ): ?>
					<ul id="shotsByPlayerId" class="hfeed vcalendar">
						<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
						<li>
							<?php if( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail( '323-243', array( 'class' => 'img-responsive' ) ); ?>
							<?php else: ?>
							<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php echo get_template_directory(); ?>/assets/img/womoz-brasil.jpg">
							<?php endif; ?>
							<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							<!-- <div class="likecount"><a href="#"><span class="icon-heart"></span> 71</a></div> -->
							<div class="commentcount"><a href="<?php comments_link(); ?>"><span class="icon-bubbles"></span> <?php comments_number( __( 'Comentar', 'womoz' ), __( '1 Comentário', 'womoz' ), __( '% Comentários', 'womoz' ) ); ?></a></div>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php else: ?>
					<p><?php _e( 'Por enquanto não há nenhuma novidade. :(', 'womoz' ); ?></p>
				<?php endif; ?>
				</div>
			</div>
			<!-- //news -->

			<hr>

			<!-- team -->
			<div id="team" class="container">
				<?php $voluntarias = new WP_Query( array( 'post_type' => 'voluntarias', 'post_status' => 'publish', 'posts_per_page' => '6', 'orderby' => 'rand' ) ); ?>
				<div class="sectionhead">
					<h1><?php _e( 'O Grupo', 'womoz' ); ?></h1>
					<strong><?php _e( 'Conheça algumas pessoas do time WoMoz Brasil', 'womoz' ); ?></strong>
					<hr class="separetor">
				</div>
				<div class="row">
				<?php if( $voluntarias->have_posts() ): ?>

					<div class="portfolioitems container">
						<ul id="shotsByPlayerId">
							<?php while ( $voluntarias->have_posts() ) : $voluntarias->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php if( has_post_thumbnail() ): ?>
									<figure>
										<?php the_post_thumbnail('323-243'); ?>
										<figcaption><h2><?php the_title(); ?></h2></figcaption>
									</figure>
									<?php else: ?>
									<figure>
										<img src="<?php echo get_template_directory(); ?>/assets/img/womoz-brasil.jpg" />
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
			</div>
			<!-- //team -->

			<hr>

			<?php $join = new WP_Query( array( 'pagename' => 'faca-parte', 'post_status' => 'publish' ) ); ?>
			<?php $eventos = new WP_Query( array( 'post_type' => 'tribe_events', 'post_status' => 'publish', 'posts_per_page' => '2' ) ); ?>
			<!-- join -->
			<div id="join" class="container">
				<?php while ( $join->have_posts() ) : $join->the_post(); ?>
				<div class="sectionhead">
					<h1><?php the_title(); ?></h1>
					<strong><?php echo rwmb_meta( 'womoz_page_subtitle' ); ?></strong>
					<hr class="separetor">
				</div>
				<div class="row">

					<div class="col-md-6 col-md-push-6">
						<?php the_content(); ?>
					</div>

					<div class="col-md-6 col-md-pull-6 resume-to-apply">
						<?php if( $eventos->have_posts() ):
						while ( $eventos->have_posts() ) : $eventos->the_post(); ?>

						<figure>
							<?php echo tribe_event_featured_image( null, 'thumbnail' ) ?>
							<figcaption>
								<h2><a href="<?php echo tribe_get_event_link(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<p><?php the_excerpt() ?></p>
							</figcaption>
						</figure>

						<?php endwhile; else:  ?>

						<p><?php _e( 'Por enquanto não há nenhum evento. :(', 'womoz' ); ?></p>

						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<!-- //join -->

<?php get_footer(); ?>