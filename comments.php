<?php
/**
* The template for displaying Comments.
* @package Odin
* @since 1.9.0
*/
?>

<div id="comments" class="content-wrap" itemscope itemtype="http://schema.org/Comment">
<?php if ( post_password_required() ) : ?>
		<span class="nopassword"><?php _e( 'Este post é protegido por senha. Insira a senha para visualizar todos os comentários.', 'womoz' ); ?></span>
</div>

<?php
	return;
endif;

if ( have_comments() ) : ?>
	<hr class="separetor"> <br>

	<h3 id="comments-title">
		<?php comments_number( __( 'Comentar', 'womoz' ), __( '1 Comentário', 'womoz' ), __( '% Comentários', 'womoz' ) ); ?>
	</h3>


	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above">
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Comentários Antigos', 'womoz' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Novos Comentários &rarr;', 'womoz' ) ); ?></div>
		</nav>
	<?php endif; ?>

	<ol class="commentlist">
		<?php wp_list_comments( array( 'callback' => 'odin_comments_loop' ) ); ?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above">
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Comentários Antigos', 'womoz' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Novos Comentários &rarr;', 'womoz' ) ); ?></div>
		</nav>
	<?php endif; ?>

<?php endif; ?>

<?php if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<span class="nocomments"><?php _e( 'Os comentários estão fechados.', 'womoz' ); ?></span>
<?php endif; ?>

<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	echo '<hr class="separetor"> <br>';

	comment_form(
	array(
		'comment_notes_after' => '',
		'comment_field' => '<div class="comment-form-comment form-group"><label class="control-label" for="comment">' . __( 'Comentário', 'womoz' ) . '</label><div class="controls"><textarea id="comment" name="comment" cols="45" rows="8" class="form-control" aria-required="true"></textarea></div></div>',
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<div class="comment-form-author form-group">' . '<label class="control-label" for="author">' . __( 'Nome', 'womoz' ) . ( $req ? '<span class="required"> *</span>' : '' ) . '</label><input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
			'email' => '<div class="comment-form-email form-group"><label class="control-label" for="email">' . __( 'E-mail', 'womoz' ) . ( $req ? '<span class="required"> *</span>' : '' ) . '</label><input class="form-control" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
			'url' => '<div class="comment-form-url form-group"><label class="control-label" for="url">' . __( 'Site', 'womoz' ) . '</label>' . '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>' )
		)
	)
); ?>
</div>