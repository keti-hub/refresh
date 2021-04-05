<?php

$partner_args= ['post_type' => 'partners',
				'numberposts' => 6
];

$partners = get_posts($partner_args);

?>

<div class="home-partner">
	<div class="container">
		<div class="subscription-about">
			<h2>Partner with REFRESH</h2>
			<div class="subscription-txt">
				<?php 
					$partner_about = get_post_meta($somePage -> ID, 'partner-about', 1);
					echo wpautop($partner_about);
				?>
			</div>
			<button type="button" class="partner-btn btn">
				<a href="<?php site_url();?>partnership">Partnership</a>
			</button>
		</div>

		<div class="home-partner-body ">
			<div class="row">
				<?php foreach($partners as $key => $partner) {?>
					<?php $partner_img = wp_get_attachment_image_src( get_post_thumbnail_id( $partner-> ID ), 'large', true); ?>

					<div class="col-md-2 col-4">
						<div class="partner-img-background">
							<a href="<?=get_permalink($partner-> ID); ?>">
								<img src="<?php echo $partner_img[0];?>">
							</a>
						</div>
					</div>

				<?php } ?>
			</div>
		</div>
	</div>
</div>