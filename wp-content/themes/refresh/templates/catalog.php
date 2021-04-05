<?php
/*
* Template Name: Catalog
*/
$args = ['post_type' => 'product',
		'numberposts' => -1
];
$allPosts = get_posts($args);


$terms = get_terms( array(
		    'taxonomy' => 'product_cat',
		    'hide_empty' => false,
) );


get_header();
?>
	
<div class="container">
	<div class="subscribe">
		<div class="row">
			<div class="col-md-6">
				<div class="subscribe-text">
					<h2>Orange Juice</h2>
					<p>Why should you subscribe, product descriptio, Why should you subscribe, product descriptio, Why should you subscribe, product descriptio, Why should you subscribe, product descriptio, </p>
					<a href="" class="read-more">Read More</a>
					<button type="button" class="partner-btn btn">
						<a href="<?php site_url();?>">Subscribe</a>
					</button>
				</div>
			</div>

			<div class="col-md-6">
				<div class="subscribe-image">
					<img src="<?=get_template_directory_uri();?>/assets/img/view-all.png">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="full-catalog grey">
	<div class="container">
		<div class="full-catalog-categories">
			<ul class="full-catalog-ul">
				<?php foreach ($terms as $key => $term) {;?>
					<?php if($term -> count > 0 && $key < 7) {?>
						<li>
							<a href="<?php echo get_term_link( $term -> term_id,'product_cat') ;?>">
								<h4>
									<?php echo $term -> name?>
								</h4>
							</a>
						</li>
					<?php }; ?>
				<?php }; ?>
			</ul>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<?php foreach ($allPosts as $key => $product) {; ?>
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
											echo '$ ' . $price;
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

<?php get_footer();?>