<?php 
	$value = get_post();
	$categories = get_categories();
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full");
?>


