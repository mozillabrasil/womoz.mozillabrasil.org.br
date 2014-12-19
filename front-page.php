<?php get_header(); ?>
			<!-- related -->
			<div id="related">
				<div class="container">
					<div class="col-md-3">
						<h4><?php _e( 'Alguns projetos relacionados:', 'womoz' ); ?></h4>
					</div>
					<div class="col-md-9">
						<ul>
							<li><img src="<?php bloginfo('template_directory'); ?>/assets/img/webmaker.png" alt="Wemaker"></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/assets//img/firefox.png" alt="Firefox"></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/assets//img/mdn.png" alt="MDN"></li>
						</ul>
					</div>
				</div>
				<hr>
			</div>
			<!-- //related -->

			<!-- about -->
			<div id="about" class="container">
				<div class="col-md-6">
					<div class="row">
						<h2 class="wow">O que é WoMoz?</h2>
						<p class="wow">WoMoz (Women & Mozilla) é uma comunidade composta por entusiastas da web aberta com foco em aumentar o envolvimento de mulheres na tecnologia.</p>
						<p class="wow">Nosso objetivo principal é dar maior visibilidade e incentivar o trabalho das mulheres dentro do mundo Open Source.</p>
						<p class="wow">O WoMoz existe desde 2009 e tem passado por reformulações de objetivos. No Brasil o movimento foi iniciado em outubro de 2014 por um grupo de voluntárias da comunidade brasileira.</p>
						<p class="wow">O futuro da web está em nossas mãos - venha lutar com a gente :)</p>
						<a class="dribbble-follow-button" href="#">Faça parte</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/user.png" alt="We can do it!">
				</div>
			</div>
			<!-- //about -->

			<hr>

			<!-- projects -->
			<div id="project" class="container">
				<?php $projetos = new WP_Query( array( 'post_type' => 'projetos', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
				<div class="sectionhead  row">
					<h3><?php _e( 'Projetos do WoMoz', 'womoz' ); ?></h3>
					<hr class="separetor">
				</div>

				<div class="row">
					<?php if( $projetos->have_posts() ): ?>

					<?php while ( $projetos->have_posts() ) : $projetos->the_post(); ?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<?php if( has_post_thumbnail() ) {
							the_post_thumbnail('thumbnail');
						} else {
							echo '<img class="img-responsive" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/project-thumbnail-default.jpg" alt="'.the_title().'" />';
						} ?>
						<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
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

			<!-- news -->
			<div id="news">
				<div class="sectionhead">
					<h3><?php _e( 'Novidades e eventos no Brasil', 'womoz' ); ?></h3>
					<hr class="separetor">
				</div>

				<div class="portfolioitems container">
					<ul id="shotsByPlayerId">
						<li>
							<a href="#"><img src="http://wam.mozillabrasil.org.br/assets/images/events/BRh9Ednyo9.jpg" width="323" height="243" alt="#"></a>
							<h3><a href="#">Futurecom 2014</a></h3>
							<div class="likecount"><a href="#"><span class="icon-heart"></span> 71</a></div>
							<div class="commentcount"><a href="#"><span class="icon-bubbles"></span> 15</a></div>
						</li>
					</ul>
				</div>
			</div>
			<!-- //news -->

			<!-- team -->
			<div id="team" class="container">
				<?php $voluntarias = new WP_Query( array( 'post_type' => 'voluntarias', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
				<div class="sectionhead">
					<h3><?php _e( 'O Grupo', 'womoz' ); ?></h3>
					<h4><?php _e( 'Conheça algumas voluntárias do WoMoz', 'womoz' ); ?></h4>
					<hr class="separetor">
				</div>
				<div class="row">
					<?php if( $voluntarias->have_posts() ): ?>

					<?php while ( $voluntarias->have_posts() ) : $voluntarias->the_post(); ?>
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

					<?php else: ?>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p><?php _e( 'Por enquanto não há nenhuma voluntária cadastrada. :(', 'womoz' ); ?></p>
					</div>

					<?php endif; ?>
				</div>
			</div>
			<!-- //team -->

			<!-- join -->
			<div id="join" class="container">
				<div class="sectionhead">
					<h3><?php _e( 'Faca parte do WoMoz', 'womoz' ); ?></h3>
					<h4><?php _e( 'Juntos, vamos contruir uma web aberta e para todos!', 'womoz' ); ?></h4>
					<hr class="separetor">
				</div>

				<div class="row">
					<div class="col-md-6" >
						quer ajudar
					</div>
					<div class="col-md-6">
						inscreva-se
					</div>
				</div>
			</div>
			<!-- //join -->

<?php get_footer(); ?>