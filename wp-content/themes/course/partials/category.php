<?php 
	$value = get_post();
	$categories = get_categories();
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full");
?>


<div class="each-post col-12 col-lg-3">
	<img class="each-post-image" src="<?php echo $imgsrc[0];?>" alt="">
	<div class="each-post-about">
		<div class="categories">
            <?php $postCategories = get_the_category($value -> ID); ?>

			<?php foreach ($postCategories as $x => $postCat): ?>
				<button><a href="<?=get_category_link($postCat -> term_id); ?>">
					<?php echo $postCat -> name; ?>
				</a></button>
			<?php endforeach; ?>

        </div>
        <h2 class="each-post-title">
        	<a href="<?php echo get_permalink($value -> ID) ?>">
            	<?php echo $value -> post_title; ?>
            </a>
        </h2>
        <div class="each-pst-text">
        	<?php 
        	$x = $value -> post_content;
        	$x = strip_tags($x);
        	$x = substr($x, 0, 50);
            	echo $x; 

        	?>
        </div>
	</div>
</div>



