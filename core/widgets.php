<?php
/* Sidebar
---------------------------------------------------------------------------*/
register_sidebar( array(
	'name'   => 'Sidebar',
	'id' => 'sidebar',
	'description' => __('Conteúdo da Sidebar'),
	'before_widget' => "\n",
	'after_widget' => "\n",
	'before_title' => "<div class='sectionhead'>\n<h2>",
	'after_title' => "</h2>\n<hr class='separetor'>\n</div>"
));

/* Rodapé
---------------------------------------------------------------------------*/
register_sidebar( array(
	'name'   				=> 'Rodapé Social',
	'id' 						=> 'rodape-social',
	'description' 	=> __('Widget com Redes Sociais para o rodapé.'),
	'before_widget' => "<!-- widget -->\n",
	'after_widget' 	=> "\n<!-- /widget -->",
	'before_title' 	=> "",
	'after_title' 	=> ""
));

/* Class Social Icons
---------------------------------------------------------------------------*/
class Social_Icons_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'womoz_social_icons',
			__( 'Social Icons', 'womoz' ),
			array( 'description' => __( 'Exibe os ícones das redes sociais.', 'womoz' ), )
			);
	}

	public function form( $instance ) {
		$facebook     = isset( $instance['facebook'] ) ? $instance['facebook'] : '';
		$twitter     	= isset( $instance['twitter'] ) ? $instance['twitter'] : '';
		$flickr     	= isset( $instance['flickr'] ) ? $instance['flickr'] : '';

		?>
		<p><small>Insira a URL correspondente em cada campo.</small></p>

		<p>
			<label for="<?php echo $this->get_field_id('facebook'); ?>">
				<?php _e('Facebook:'); ?>
				<input id="<?php echo $this->get_field_id('facebook'); ?>" class="widefat"  name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('twitter'); ?>">
				<?php _e('Twitter:'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('flickr'); ?>">
				<?php _e('Flickr:'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo $flickr; ?>" />
			</label>
		</p>

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? esc_url( $new_instance['facebook'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? esc_url( $new_instance['twitter'] ) : '';
		$instance['flickr'] = ( ! empty( $new_instance['flickr'] ) ) ? esc_url( $new_instance['flickr'] ) : '';

		return $instance;
	}

	public function widget( $args, $instance ) {

		echo $args['before_widget'];

		echo '<div class="footersocial">';
			echo '<ul>';
				if ( ! empty( $instance['facebook'] ) ) { echo '<li><a title="Facebook" href="'.$instance['facebook'].'" target="_blank"><span class="icon-social-facebook"></span></a></li>'; }
				if ( ! empty( $instance['twitter'] ) ) { echo '<li><a title="Twitter" href="'.$instance['twitter'].'" target="_blank"><span class="icon-social-twitter"></span></a></li>'; }
				if ( ! empty( $instance['flickr'] ) ) { echo '<li><a title="Flickr" href="'.$instance['flickr'].'" target="_blank"><span class="icon-camera"></span></a></li>'; }
			echo '</ul>';
		echo '</div>';


		echo $args['after_widget'];
	}
}
function womoz_social_icons_widget() {
	register_widget( 'Social_Icons_Widget' );
}
add_action( 'widgets_init', 'womoz_social_icons_widget' );