<div class="hero-text">
	<h1><?php echo get_post_meta($somePage -> ID, 'hero', 1);?></h1>
	<div class="hero-inside">
		<?php 
			$heroText = get_post_meta($somePage -> ID, 'hero-about', 1);
			echo wpautop($heroText);
		?>
	</div>
	<button type="button" class="contact-button btn btn-outline-success">
		<a href="<?php site_url();?>contact">Contact Us</a>
	</button>
</div>