<?php
/*
* Template Name: About Us
*/


$somePage = get_post();

get_header();
?>


	<div class="container">
		<div class="aboutUs-head">
			<div class="row">
				
				<div class="col-md-7">
					<?php require get_template_directory() . '/partials/hero-text.php';?>
				</div>
				
				
				<div class="col-md-5">
					<div class="divs-4">

						<div class="something">
							
							<div class="each-size orange">
								<span>34 Partners</span>
							</div>
						
							<div class="each-size green">
								<span>Products</span>
							</div>
						</div>
						<div class="something">
							
							<div class="each-size brown">
								<span>Services</span>
							</div>
						
							<div class="each-size yellow">
								<span>Services</span>
							</div>
						</div>


					</div>
				</div>
							
			</div>
		</div>
	</div>


<?php get_footer();?>