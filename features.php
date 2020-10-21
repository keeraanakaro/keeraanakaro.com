<?php require_once('files/config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('files/metatags.php'); ?>

	<?php require_once('files/assets_css.php'); ?>
</head>

<style type="text/css">
.single_screen_image { max-width:100% !important;}
</style>

<body>

	<?php require_once('files/below_body.php'); ?>


	<header id="home" class="hero-area-2">
		<div class="overlay"></div>
		
		<?php require_once('files/navbar.php'); ?>
		
		<div class="container">
			<div class="row space-100">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="contents text-center">
						<h2 class="head-title text-center">
							Features
						</h2>
						<p>We feature a great selection of high-quality merchandise, friendly service and, of course, Every Day Low Prices. We also have another goal: to bring you the best shopping experience on the Internet.</p>
						<div class="header-button">
							<a href="#app-features" class="btn btn-border">Explore Features</a>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</header>


	<?php require_once('files/upcoming_feature.php'); ?>


	<div id="app-features" class="section">
		<div class="container">
			<div class="section-header">   
				<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">features</p>       
				<h2 class="section-title wow fadeIn" data-wow-delay="0.2s">Amazing Features</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12 col-xs-12">
					<div class="content-left text-right">

						<div class="box-item left">
							<span class="icon">
								<i class="lni-leaf"></i>
							</span>
							<div class="text">
								<h4>Save More</h4>
								<p>Save more with Keeraanakaro! We give you the lowest prices on all your grocery needs.</p>
							</div>
						</div>

						<div class="box-item left">
							<span class="icon">
								<i class="lni-dashboard"></i>
							</span>
							<div class="text">
								<h4>Exclusive Special Offers</h4>
								<p>Enjoy awesome freebies, sneak peeks of new products, dollar-off discounts, and more!</p>
							</div>
						</div>

						<div class="box-item left">
							<span class="icon">
								<i class="lni-headphone-alt"></i>
							</span>
							<div class="text">
								<h4>Easy Navigation</h4>
								<p>User Friendly app in which you easily navigate through and place your order.</p>
							</div>
						</div>

						<div class="box-item left">
							<span class="icon">
								<i class="lni-headphone-alt"></i>
							</span>
							<div class="text">
								<h4>Faster Than Fast</h4>
								<p>Our delivery system is so organized that makes our product faster to customers.</p>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12">
					<div class="show-box">
						<img class="img-fluid single_screen_image" src="<?=$url?>img/screens/screen4.png" alt="">
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12">
					<div class="content-right text-left">

						<div class="box-item right">
							<span class="icon">
								<i class="lni-shield"></i>
							</span>
							<div class="text">
								<h4>Best Prices & Offers</h4>
								<p>Cheaper prices than your local supermarket, great cashback offers to top it off.</p>
							</div>
						</div>

						<div class="box-item right">
							<span class="icon">
								<i class="lni-star-filled"></i>
							</span>
							<div class="text">
								<h4>Easy Returns</h4>
								<p>Not satisfied with a product? Return it at the doorstep & get a refund within hours.</p>
							</div>
						</div>

						<div class="box-item right">
							<span class="icon">
								<i class="lni-cup"></i>
							</span>
							<div class="text">
								<h4>Wide Assortment</h4>
								<p>Choose from 100+ products across food, personal care, household & other categories.</p>
							</div>
						</div>

						<div class="box-item right">
							<span class="icon">
								<i class="lni-cup"></i>
							</span>
							<div class="text">
								<h4>Safe & Secure</h4>
								<p>Keeraanakaro ensures customers safety and security is in safe hands. Vendors are subject to security oriented policy terms for your families security.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<section class="video-promo section">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="video-promo-content text-center">
						<a href="https://www.youtube.com/watch?v=yP6kdOZHids" class="video-popup"><i class="lni-film-play"></i></a>
						<h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Video</h2>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php require_once('files/screens_slider.php'); ?>

	<?php require_once('files/testimonials.php'); ?>

	<?php require_once('files/subscribe.php'); ?>



	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>
</body>
</html>