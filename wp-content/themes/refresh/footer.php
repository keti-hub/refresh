<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package refresh
 */

?>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a class="navbar-brand" href="<?php echo site_url();?>">
		                <img class="footer-main-img" src="<?=get_template_directory_uri();?>/assets/img/re-fresh.png" alt="">
		            </a>

					<ul class="footer-ul">
						<li>21 Valentin Rapids Apt. 335 New Jersey, New York, USA</li>
						<li>+1 (243) 576-98-02</li>
						<li>info@company.com</li>
					</ul>

					<div class="footer-icons">
						<div class="each-footer-icon">
							<a href="">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.png">
							</a>
						</div>
						<div class="each-footer-icon">
							<a href="">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/in.png">
							</a>
						</div>
						<div class="each-footer-icon">
							<a href="">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/insta.png">
							</a>
						</div>
					</div>

				</div>
				<div class="col-md-3 col-sm-6 each-footer-col">
					<h5>Service</h5>
					<ul class="footer-ul">
						<li><a href="">First Service</a></li>
						<li><a href="">Corporate Catering for events</a></li>
						<li><a href="">B2B supply</a></li>
						<li><a href="">Subscriptions</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-6 each-footer-col">
					<h5>Catalog</h5>
					<ul class="footer-ul">
						<li><a href="">Shop</a></li>
						<li><a href="">Subscriptions</a></li>
						<li><a href="">Bundles</a></li>
						<li><a href="">Merchandise</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-6 each-footer-col">
					<h5>Information</h5>
					<ul class="footer-ul">
						<li><a href="">Blog</a></li>
						<li><a href="">News</a></li>
						<li><a href="">Payment options</a></li>
						<li><a href="">Delivery options</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-6 each-footer-col">
					<h5>About Us</h5>
					<ul class="footer-ul">
						<li><a href="">Partners</a></li>
						<li><a href="">Zummo</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
				
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h6>&#169; Copyright 2021 All Right Reserved</h6>
					</div>
					<div class="col-md-7">
						<div class="footer-bottom-uls">
							<ul class="footer-bottom-ul">
								<li><a href="">Delivery Options</a></li>
								<li><a href="">Payment Options</a></li>
							</ul>
							<ul class="footer-bottom-ul">
								<li><a href="">Privacy policy</a></li>
								<li><a href="">Terms & Confditions</a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>







	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
<?php wp_footer(); ?>

</body>
</html>
