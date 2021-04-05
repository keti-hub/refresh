<?php
/*
* Template Name: HomePage
*/

get_header();
$page = get_post();
$somePage = get_post();

$args = ['post_type' => 'post',
		'numberposts' => 1
];

$mainPost = get_posts($args);

$posts = get_posts();

$arg_product = ['post_type' => 'product',
				'numberposts' => 4
];

$products = get_posts($arg_product);

$terms = get_terms( array(
		    'taxonomy' => 'product_cat',
		    'hide_empty' => false,
) );

?>



<div class="main-about container">
	<div class="row">
		<div class="col-md-6">
		
			<?php require get_template_directory() . '/partials/hero-text.php';?>
		</div>

		<div class="col-md-6">
			<div class="latest-post">
				<?php foreach($mainPost as $key => $post) {?>
					<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', true); ?>

					
					<img src="<?php echo $img[0];?>">
					<h3>
						<?php echo $post -> post_title;?>	
					</h3>
					<h6>
						<?php echo $post -> post_date;?>
					</h6>

					<p>
						<?php 
						$latestContent = $post -> post_content;
						$latestContent = strip_tags($latestContent);
						echo substr($latestContent, 0, 176);
						echo (strlen($latestContent) > 150) ? '...' : '';
						?>
					</p>
					<a href="<?=get_permalink($post -> ID); ?>">Read More</a>
				
				<?php }; ?>
			</div>
		</div>
	</div>
</div>










<div class="exploreProducts grey">
	<div class="container">
	<h2>Explore Our Products</h2>
		<div class="home-4products">
			<div class="row">

				<?php foreach ($products as $key => $product) {; ?>
					<?php $product_img = wp_get_attachment_image_src( get_post_thumbnail_id( $product ->ID ), 'large', true); ?>
					

					<div class="col-lg-3 col-md-6">

						<div class="each-post">
							<a href="<?=get_permalink($product -> ID);?>">
								<img src="<?php echo $product_img[0];?>">
								<div class="eachPost-about">
									<h3>
										<?php echo $product -> post_title;?>
									</h3>
									<p>
										<?php 
											$productContent = $product -> post_content;
											$productContent = strip_tags($productContent);
											echo substr($productContent, 0, 150);
										?>
									</p>
									<div class="eachProduct-price">
										<span>
											<?php 
												$price = get_post_meta($product -> ID, 'price', 1);
												echo '$ '.$price;
											?>
										</span>
									</div>
								</div>
							</a>
						</div>
					</div>

				<?php };?>

			</div>
		</div>
	</div>
</div>











<div class="subscription container">
	
	<div class="subscription-about">
		<h2>Subscriptions</h2>
		<div class="subscription-txt">
			<?php 
				$subscriptionTXT = get_post_meta($page -> ID, 'subscription-txt', 1);
				echo wpautop($subscriptionTXT);
			?>
		</div>
	</div>

	<div class="subscription-content">
		<div class="row"> 
			<?php foreach ($terms as $key => $term) {;?>
				<?php if($term -> count > 0) {?>
					<?php if($key > 2) {?> 
						<?php if($key % 2 == 0) {?>
							<div class="each-category col-8">
								<a href="<?php echo get_term_link( $term -> term_id,'product_cat') ;?>">
									<?php echo strip_tags($term -> description, '<img>')?>
									<h4>
										<?php echo $term -> name?>
									</h4>
								</a>
							</div>
						<?php }  else {?>
							<div class="each-category col-4">
								<a href="<?php echo get_term_link( $term -> term_id,'product_cat') ;?>">
									<?php echo strip_tags($term -> description, '<img>')?>
									<h4>
										<?php echo $term -> name?>
									</h4>
								</a>
							</div>
						<?php }; ?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</div>

		<div class="row">
			<?php foreach ($terms as $key => $term) {;?>
				<?php if($term -> count > 0) {?>
					<?php if($key < 3 ) {?> 
						<?php if($key % 2 == 0) {?>

							<div class="each-category col-5">
								<a href="<?php echo get_term_link( $term -> term_id,'product_cat') ;?>">
									<?php echo strip_tags($term -> description, '<img>')?>
									<h4>
										<?php echo $term -> name?>
									</h4>
								</a>
							</div>
						<?php }  else {?>
							<div class="each-category col-4">
								<a href="<?php echo get_term_link( $term -> term_id,'product_cat') ;?>">
									<?php echo strip_tags($term -> description, '<img>')?>
									<h4>
										<?php echo $term -> name?>
									</h4>
								</a>
							</div>
						<?php }; ?>
					<?php } ?>
				<?php } ?>
			<?php } ?>

			<div class="each-category col-3">
				<a href="">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/view-all.png">
					<h3>View More</h3>
				</a>
			</div>

		</div>

	</div>
	
</div>









<div class="company grey">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="company-txt">
					<h2>For Your Company</h2>
				
					<div class="company-txt-inside">
						<?php 
							$companyTXT = get_post_meta($page -> ID, 'for-company', 1);
							echo wpautop($companyTXT);
						?>
					</div>

					<button type="button" class="company-btn btn">
						<a href="<?php site_url();?>contact">Contact Us</a>
					</button>
				</div>
			</div>

			<div class="col-md-6">
				<?php require get_template_directory() . '/partials/services.php';?>
			</div>
		</div>
	</div>
</div>



<?php require get_template_directory() . '/partials/partners-partial.php';?>




<div class="home-news grey">
	<div class="container">

		<h2>Our News</h2>
		<div class="inner-home-news row">
			<div class="col-md-5">
				<?php foreach($posts as $key => $one_news) {?>
						<?php $posts_img = wp_get_attachment_image_src( get_post_thumbnail_id( $one_news-> ID ), 'large', true); ?>
					<?php if($key > 0 && $key < 5) { ?>
						<div class="each-news">
							
							<img src="<?php echo $posts_img[0];?>">
							<div class="each-news-text">
								<a href="<?=get_permalink($one_news -> ID);?>">
									<h3>
										<?php echo $one_news -> post_title;?>
									</h3>
									<p>
										<?php echo $one_news -> post_date;?>
									</p>
								</a>
							</div>
							
						</div>
					<?php }?>

				<?php };?>

				<h4><a href="">Viwe more</a></h4>
			</div>


			<div class="col-md-7">
				<div class="main-last-post">
					<?php foreach($mainPost as $key => $post) {?>
						<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', true); ?>

						
						<img src="<?php echo $img[0];?>">

						<h3>
							<?php echo $post -> post_title;?>	
						</h3>
						<h6>
							<?php echo $post -> post_date;?>
						</h6>

						<p>
							<?php 
							$latestContent = $post -> post_content;
							$latestContent = strip_tags($latestContent);
							echo substr($latestContent, 0, 176);
							echo (strlen($latestContent) > 150) ? '...' : '';
							?>
						</p>
						<a href="<?=get_permalink($post -> ID); ?>">Read More</a>
						
					<?php }; ?>
				</div>
			</div>
		</div>
	</div>
</div>






<?php require get_template_directory() . '/partials/follow-us.php';?>




<?php get_footer(); ?>
