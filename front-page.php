<?php
/**
 * Header
 */

get_header(); ?>

<?php 
/**
 * A front-page is a static homepage
 * Wordpress call this first instead of index.php or home.php
 */
_e( 'A Static Homepage', 'wp-default' );


/** Footer */
get_footer();