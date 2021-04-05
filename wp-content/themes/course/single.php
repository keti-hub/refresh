<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package course
 */

get_header();
$value = get_post();
$img = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), 'large', true);
?>

<div class="single-post">
	<img class="single-post-image" src="<?php echo $img[0];?>" alt="">
	<div class="single-post-about">
		<h2 class="single-post-title">
        	<?php echo $value -> post_title; ?>
        </h2>
		<div class="categories">
            <?php $postCategories = get_the_category($value -> ID); ?>

            <?php foreach ($postCategories as $x => $postCat): ?>
                <button><a href="<?=get_category_link($postCat -> term_id); ?>">
                    <?php echo $postCat -> name; ?>
                </a></button>
            <?php endforeach; ?>
        </div>
        <div class="single-post-text">
        	<?php echo $value -> post_content; ?>
        </div>
	</div>
</div>


<?php get_footer(); ?>
