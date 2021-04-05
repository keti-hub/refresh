<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package course
 */

get_header();
?>

	<div class="archive row">

		<?php if ( have_posts() ) : ?>
			
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'partials/category');
			endwhile;

		else :

			get_template_part( 'partials/content-none');

		endif;
		?>

	</div>

<?php


get_footer();

?>
