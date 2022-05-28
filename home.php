<?php
/**
 * Header
 */

get_header(); ?>

<?php
/**
 * This is the same as index.php but this time home.php will call first instead index.php
 * If wp can't see or find front-page.php
 */
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content' );
	}

	// Previous/next page navigation.
	//twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}
/** Footer */
get_footer();