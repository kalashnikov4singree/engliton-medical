<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="wrapper">
		<div class="container">
			<?php
			if ( in_category('Services') ) {?>
				<div class="about-us-content">
					<?php include 'single-services.php';?>
				</div>
				<div class="service-modal-btn text-center">
					<!-- Button trigger modal -->
					<button type="button" class="btn-englinton" data-toggle="modal" data-target="#modalService">
						Request an Appointment
					</button>
				</div>
<?php } elseif (in_category('Blog')){
		include 'single-blog.php';
	}
	else {
		while ( have_posts() ) : the_post();
	
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
	
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
	
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
	
			// End the loop.
		endwhile;
	}
?>
		</div>
	</div>
</div><!-- Page Content End -->
<?php get_footer(); ?>
