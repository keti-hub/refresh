<?php

/*
* Template Name: Blog
*/

get_header();

$allPosts = get_posts();
$categories = get_categories();

?>

<div class="blog-posts">
	<div class="posts-head">
	    <h1>All Blog Posts</h1>
	</div>

	<div class="blog-categories">
		<h2>Categories</h2>
		<?php if($categories) { ?>
			<ul class="blog-categories-ul">
				<?php foreach ($categories as $key => $cat) { ?>
					<li>
						<a href="<?=get_category_link($cat -> term_id); ?>">
							<?php echo $cat -> name; ?> (<?php echo $cat -> count;  ?>)
						</a>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>	
	</div>

	<div class="posts-body row">
		<?php foreach ($allPosts as $key => $value) {?>
			<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full"); ?>
		    <div class="each-post col-12 col-md-6 col-lg-3">
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
	    <?php } ?>
	</div>
</div> 

<?php get_footer(); ?>