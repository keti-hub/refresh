<div class="social-media container">
	<div class="subscription-about">
		<h2>Follow Us</h2>
		<div class="subscription-txt">
			<?php 
				$follow_txt = get_post_meta($somePage -> ID, 'follow-txt', 1);
				echo wpautop($follow_txt);
			?>
		</div>
	</div>

	<div class="icons row">
		<div class="col-4">
			<a href="">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.png">
			</a>
		</div>
		<div class="col-4">
			<a href="">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/in.png">
			</a>
		</div>
		<div class="col-4">
			<a href="">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/insta.png">
			</a>
		</div>
	</div>
</div>
