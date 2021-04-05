<?php 
$service_args = ['post_type' => 'services',
				 'numberposts' => 4
];

$services = get_posts($service_args);

?>

<div class="services">
	<div class="each-service row ">
		<?php foreach ($services as $key => $oneService) {; ?>
		<?php $serviceImg = wp_get_attachment_image_src( get_post_thumbnail_id( $oneService -> ID ), 'large', true); ?>
			<div class="col-md-6">
				<h3>
					<?php echo $oneService -> post_title ?>
				</h3>

				<a href="<?=get_permalink($oneService -> ID);?>">
					<img src="<?php echo $serviceImg[0];?>">
				</a>
			</div>
		<?php }; ?>
	</div>
</div>