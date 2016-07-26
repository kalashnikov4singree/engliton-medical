<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
<!--		<h2 class="comments-title">-->
<!--			--><?php
//				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
//					number_format_i18n( get_comments_number() ), get_the_title() );
//			?>
<!--		</h2>-->

		<?php twentyfifteen_comment_nav(); ?>

		<ol class="comment-list list-unstyled">
			<?php
				wp_list_comments("callback=mytheme_comment");
			?>
		</ol><!-- .comment-list -->

		<?php twentyfifteen_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

	<?php

	$args = array(
		'comment_notes_before' => '',
		'label_submit' => __( 'Submit Comment', 'textdomain' ),
		'fields' => apply_filters(
			'comment_form_default_fields', array(
				'author' =>'<div class="row"><div class="col-sm-6 form-group">' . '<input id="author" class ="form-control" placeholder="Your Name" name="author" type="text" value="' .
					esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
					'' .
					( $req ? '<!--<span class="required">*</span>-->' : '' )  .
					'</div>'
			,
				'email'  => '<div class="form-group col-sm-6">' . '<input id="email" class="form-control" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' />'  .
					'' .
					( $req ? '<!--<span class="required">*</span>-->' : '' )
					.
					'</div></div>',
				'url'    => ''
			)
		),
		'comment_field' => '<div class="form-group">' .
			''.
			'<textarea class="form-control" id="comment" name="comment" placeholder="" cols="45" rows="8" aria-required="true"></textarea>' .
			'</div>',
		'comment_notes_after' => '',
		'title_reply' => '<div class="crunchify-text"> <h5>Please Post Your Comments & Reviews</h5></div>'
	);
	comment_form($args); ?>

</div><!-- .comments-area -->
