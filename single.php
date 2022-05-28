<?php
/**
 * The template for displaying all single posts
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content' );
	
    wp_list_categories('title_li=');
    wp_tag_cloud();
    wp_get_archives( array( 'type' => 'daily', 'limit' => 14, 'show_post_count' => 'true' ) );
	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile; // End of the loop.
get_sidebar();
get_footer();
