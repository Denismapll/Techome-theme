<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

		<main>

		<?php 
			print_r(get_post_meta(get_the_ID()))
		?>

		</main><!-- #main -->

<?php
get_footer();
