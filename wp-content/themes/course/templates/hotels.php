<?php

/*
* Template Name: Hotels
*/

get_header();
$args = [
	'post_type' => 'hotels'
];
$allPosts = get_posts($args);

?>


<div class="getting-here">
    <img class="main-image" src="https://i.pinimg.com/originals/f8/f8/81/f8f881ab6b26b453d2d01818a964a4aa.jpg" alt="">
    <div class="getting-here-text">
        <h3>Go to Gudauri /</h3>
        <h1>Book a saty</h1>
        <h2>Hotels. Private apartments. We have got them covered.</h2>
    </div>

    <div class="blur"></div>
</div>

<div class="hotel-container">
	<div class="one-hotel-container">
        <div class="one-hotel row">
            <div class="one-hotel-text col-lg-6 col-12">
                <h1>Gudauri Palace</h1>
                <p>Aparthotel Gudauri Palace is located in New Gudauri directly near the gondola ski lift (high-speed closed gondola) in the prestigious area of New Gudauri. On the ground floor and nearby many restaurants, bars, cafes, clubs, SPA with a large swimming pool. There are also ski depot, equipment rental, ski service.</p>
            </div>
            <img  class="col-lg-6 col-12" src="https://cf.bstatic.com/images/hotel/max1024x768/872/87203274.jpg">
        </div>
    </div>
	
	<div class="hotels row">
        <?php if(count($allPosts) > 0) { ?>
            <?php foreach ($allPosts as $key => $value) {; ?>
                <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full"); ?>

                <?php if($key < 4) {?>
                    <div class="col-lg-3 col-12">
                        <div class="hotel">
                            <a href="<?php echo get_permalink($value -> ID) ?>">
                                <img src="<?php echo $imgsrc[0]; ?>">
                                
                                <div class="hotel-text">
                                    <p>
                                        <?php 
                                            $x = $value -> post_content;
                                            $x = strip_tags($x);
                                            $x = substr($x, 0, 3);
                                            echo $x; 
                                        ?>
                                    </p>
                                    <h4>
                                        <?php echo $value -> post_title; ?>
                                    </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        <?php } else { ?>
            <h3>ვერ მოიძებნა</h3>
        <?php };?>
		
    </div>

    <div class="one-hotel-container">
        <div class="one-hotel row">
            <div class="one-hotel-text col-lg-6 col-12">
                <h1>Loft 1, 2</h1>
                <p>Apartment buildings are located in New Gudauri, near the gondola ski lift (high-speed closed gondola. On the ground floor you can find restaurants and bars, ski depot, ski rental. Nearby there are grocery store, ATM, spa center with a gym and swimming pool, equipment and snowmobile rental, ski service, tubing, children’s playground, open air restaurants and cafes. Apartments are renovated and equipped with essentials. They have different designs, types and arrangement of beds.</p>
            </div>
            <img class="col-lg-6 col-12" src="https://cf.bstatic.com/images/hotel/max1024x768/872/87203274.jpg">
        </div>
    </div>


    <?php if(count($allPosts) >4) { ?>
        <div class="hotels row">
             <?php if(count($allPosts) > 0) { ?>
                <?php foreach ($allPosts as $key => $value) {; ?>
                    <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full"); ?>

                    <?php if($key > 3) {?>
                        <div class="col-lg-3 col-12">
                            <div class="hotel">
                                <a href="<?php echo get_permalink($value -> ID) ?>">
                                    <img src="<?php echo $imgsrc[0]; ?>">
                                    
                                    <div class="hotel-text">
                                        <p>
                                            <?php 
                                                $x = $value -> post_content;
                                                $x = strip_tags($x);
                                                $x = substr($x, 0, 3);
                                                echo $x; 
                                            ?>
                                        </p>
                                        <h4>
                                            <?php echo $value -> post_title; ?>
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

            <?php } else { ?>
                <h3>ვერ მოიძებნა</h3>
            <?php };?>
        </div>
    <?php } ?>
</div>



<?php get_footer(); ?>