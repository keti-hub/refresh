<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package course
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			
			while ( have_posts() ) :
				the_post();

				get_template_part( 'partials/content');

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'partials/content-none');

		endif;
		?>

	</main>

<?php get_footer(); ?>