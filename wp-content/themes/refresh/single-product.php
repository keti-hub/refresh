<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package refresh
 */

get_header();

$product = get_post();
$img = wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID ), 'large', true);
$price = get_post_meta($product -> ID, 'price', 1);
$inner_name = get_post_meta($product -> ID, 'product-innername', 1);
$protein = get_post_meta($product -> ID, 'protein', 1);
$energy_value = get_post_meta($product -> ID, 'energy-value', 1);
$fats = get_post_meta($product -> ID, 'fats', 1);
$carbon_hidrates = get_post_meta($product -> ID, 'carbon-hidrates', 1);
$calories = get_post_meta($product -> ID, 'calories', 1);

$product_term = get_the_terms($product, 'product_cat');
$product_term_slug = $product_term[0]-> slug;

// $terms = get_terms( array(
// 		    'taxonomy' => 'product_cat',
// 		    'hide_empty' => false,
// ) );

$arg_product = ['post_type' => 'product',
				'numberposts' => -1
];

$products = get_posts($arg_product);



$product_id = $product -> ID;
$productWC = new WC_product($product_id);
$attachment_ids = $productWC->get_gallery_image_ids(); 
?>

<div class="container">
	<div class="single-product-main">
		<div class="row">
			<div class="col-md-6">
				<div class="single-product-images">
					<img src="<?php echo $img[0];?>">
				</div>
				<div class="single-product-gallery">
					<?php foreach( $attachment_ids as $attachment_id ) { ?>
						<div class="each-gallery-img">
						    <?php echo wp_get_attachment_image($attachment_id, 'full'); ?>
					    </div>
					<?php }; ?>
				</div>
			</div>
			<div class="col-md-6">

				<div class="sinle-product-info">
					<div class="product-top">
						<h1>
							<?php echo $product -> post_title;?>
						</h1>
						<span>
							<?php echo '$ '.$price;?>
						</span>
						<h2>
							<?=$inner_name; ?>
						</h2>
					</div>
					<div class="nutritional-value">
						<h3>Nutriotional Value On Every 100 GR. Product</h3>
						<div class="nutritional-value-uls">
							<ul class="nutritional-value-ul">
								<li>Calories:</li>
								<li>Evergy Value:</li>
								<li>Protein:</li>
								<li>Fats (including 0.024 Saturated):</li>
								<li>Carbon Hidrate Including Sugar:</li>
							</ul>

							<ul class="nutritional-value-ul">
								<li>
									<?= $calories; ?>
								</li>
								<li>
									<?= $energy_value . 'KJ'; ?>
								</li>
								<li>
									<?= $protein . 'GR (1%)'; ?>
								</li>
								<li>
									<?= $fats . 'GR (1%)'; ?>
								</li>
								<li>
									<?= $carbon_hidrates . 'GR'; ?>
								</li>

							</ul>
						</div>
					</div>
					<div class="about-product">
						<h3>About Product</h3>
						<p> <?php echo $product -> post_content;?> </p>
					</div>
					<div class="product-price">
						<div class="row">
							<div class="product-price-col col-6">
								<h2>Total Price</h2>
								<span>
									<?php echo '$ '.$price;?>
								</span>
							</div>
							<div class="product-price-col col-6">
								<h2>Quantity</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="related-products grey">
	<div class="container">
		<h2>Related Products</h2>
		<div class="row">
			<?php foreach ($products as $key => $eachPro) {; ?>
				<?php $product_img = wp_get_attachment_image_src( get_post_thumbnail_id( $eachPro ->ID ), 'large', true); ?>
				<?php $anotherPro_term = get_the_terms($eachPro, 'product_cat'); 
					  $anotherPro_term_slug1 = $anotherPro_term[0] -> slug;
					  $anotherPro_term_slug2 = $anotherPro_term[1] -> slug;
				?>
				
				<?php if($anotherPro_term_slug1 == $product_term_slug || $anotherPro_term_slug2 == $product_term_slug) {; ?>

					<?php if($eachPro -> ID !== $product -> ID) { ?>
						<div class="col-lg-3 col-md-6">

							<div class="each-post">
								<a href="<?=get_permalink($eachPro -> ID);?>">
									<img src="<?php echo $product_img[0];?>">
									<div class="eachPost-about">
										<h3>
											<?php echo $eachPro -> post_title;?>
										</h3>
										<p>
											<?php 
												$productContent = $eachPro -> post_content;
												$productContent = strip_tags($productContent);
												echo substr($productContent, 0, 150);
											?>
										</p>
										<div class="eachProduct-price">
											<span>
												<?php 
													$price = get_post_meta($eachPro -> ID, 'price', 1);
													echo '$ '.$price;
												?>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php }; ?>
				<?php };?>
					
			<?php };?>
		</div>	
	</div>
</div>

	
<?php
get_footer();
?>