<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package course
 */

get_header();
?>

<div class="not-found">
	<h1>Page not found</h1>
	<h2><a href="<?=site_url(); ?>">Go to the home page!</a></h2>
</div>

<?php
get_footer();
