<?php
/*
* Template Name: Partnership
*/


$somePage = get_post();
$img = wp_get_attachment_image_src( get_post_thumbnail_id( $somePage->ID ), 'large', true);

get_header();
?>
	<div class="partnership-partners">
		<?php require get_template_directory() . '/partials/partners-partial.php';?>
	</div>
	
	<div class="work-together">
		<img src="<?php echo get_template_directory_uri();?>/assets/img/view-all.png">
		<div class="work-together-txt">
			<h2>Lets Work Together</h2>
			<?php 
				$work_together= get_post_meta($somePage-> ID, 'work-together', 1);
				echo wpautop($work_together);
			?>
			<a class="work-together-txt-link" href="">View Our Products Lists</a>
			<button type="button" class="company-btn btn">
				<a href="<?php site_url();?>contact">Contact Us</a>
			</button>
		</div>
	</div>


	<div class="container">
		<h2 class="service-h2">Our Services</h2>
		<div class="partnership-services grey">
			<?php require get_template_directory() . '/partials/services.php';?>
		</div>	
	</div>

	<div class="partners-say grey">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="partners-say-txt">
						<h2>Company name</h2>
						<?php 
							$partners_say = get_post_meta($somePage -> ID, 'partners-say', 1);
							echo wpautop($partners_say);
						?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="partners-say-img">
						<img src="<?php echo $img[0];?>">
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require get_template_directory() . '/partials/follow-us.php';?>
	


<?php get_footer();?>