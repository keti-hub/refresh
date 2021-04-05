<?php
	$post = get_post();
?>

<div class="search-result-item">
	<h2>
		<?php echo $post -> post_title; ?>
	</h2>
	<p>
		<?php 
			$content = $post -> post_content;
			$content = strip_tags($content);
			echo substr($content, 0, 500);
			echo (strlen($content) > 500) ? '...' : '';
		?>
		<a href="<?=get_permalink($post -> ID); ?>">Read More</a>
	</p>
</div>

