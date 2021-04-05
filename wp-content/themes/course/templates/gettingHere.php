<?php 

/*
* Template Name: GettingHere
*/

get_header();

$args = [
    'post_type' => 'services'
];
$allPosts = get_posts($args);
?>
        
<div class="getting-here">
    <img class="main-image" src="https://cf.bstatic.com/images/hotel/max1024x768/226/226635513.jpg" alt="">
    <div class="getting-here-text">
        <h3>Go to Gudauri / Plan Your Stay /</h3>
        <h1>Getting here</h1>
        <h2>Air. Car. Transport. Taxi. See detailed guide to Gudauri here.</h2>
    </div>

    <div class="blur"></div>
</div>

<div class="transport">
    <h4 class="title">There are several ways to go to Gudauri from Tbilisi:</h4>
    <ul>
        <li>Via bus</li>
        <li>Via privat transfer</li>
    </ul>
</div>

<?php if(count($allPosts) > 0) { ?>
    <?php foreach ($allPosts as $key => $value) { ?>
        <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full"); ?>

        <?php if($key % 2 !== 0) { ?>
            <div class="transport-service row <!-- <?php echo ($key % 2 !== 0) ? '' : 'image-right'; ?> -->">
                <div class="col-lg-6 col-12">
                    <img src="<?php echo $imgsrc[0]; ?>" alt="">
                </div>
                
                <div class="info-text col-lg-6 col-12">
                    <h3 class="info-text-head">
                        <?php echo $value -> post_title;?>
                    </h3>
                    <p class="info-text-body">
                        <?php 
                            $x= $value -> post_content;
                            $x= strip_tags($x);
                            echo substr($x, 0, 200);
                        ?>
                    </p>
                    <a href="<?=get_permalink($value -> ID); ?>">read more</a>
                </div>
            </div>

        <?php } else { ?>
            <div class="transport-service row image-right">
                <div class="col-lg-6 col-12">
                    <img src="<?php echo $imgsrc[0]; ?>" alt="">
                </div>

                
                <div class="info-text col-lg-6 col-12">
                    <h3 class="info-text-head">
                        <?php echo $value -> post_title;?>
                    </h3>
                    <p class="info-text-body">
                        <?php 
                            $x= $value -> post_content;
                            $x= strip_tags($x);
                            echo substr($x, 0, 200);
                        ?>
                    </p>
                    <a href="<?=get_permalink($value -> ID); ?>">read more</a>
                </div>
                
            </div>
        <?php } ?>
   <?php } ?>

<?php } ?>


<?php get_footer(); ?>