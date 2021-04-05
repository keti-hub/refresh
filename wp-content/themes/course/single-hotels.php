<?php

get_header();

$value = get_post();
$img = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), 'large', true);
?>

<div class="single-hotel">
    <h2 class="single-hotel-title">
        <?php echo $value -> post_title; ?>
    </h2>
    <img class="single-hotel-image" src="<?php echo $img[0];?>" alt="">
    <div class="single-hotel-about">
        <div class="single-hotel-text">
            <h3>About</h3>
            <p><?php echo wpautop($value -> post_content); ?></p>
        </div>
        <!-- <div class="sinle-hotel-map"></div> -->
    </div>
</div>

<?php get_footer(); ?>