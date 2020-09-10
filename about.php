<?php require_once('files/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('files/metatags.php'); ?>

	<?php require_once('files/assets_css.php'); ?>
</head>

<body>

	<header id="home" class="hero-area-2">
		<div class="overlay"></div>
		
		<?php require_once('files/navbar.php'); ?>
		
		<div class="container">
			<div class="row space-100">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="contents text-center">
						<h2 class="head-title text-center">
							KeeraanaKaro
						</h2>
						<p class="text-center">We aim to empower every local kirana store into a potential seller.</p>
						<div class="header-button">
							<a href="#" class="btn btn-border">Explore Stores</a>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</header>

	
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



	<div id="features-two" class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="img-thumb wow fadeInLeft text-center" data-wow-delay="0.3s">
						<img class="img-fluid single_screen_image" src="<?=$url?>img/screens/screen6.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
						<div>
							<p class="btn btn-subtitle">About KeeraanaKaro</p>  
							<h3>Simple, Safe and Secure</h3>
							<p>Shop on the Keeraanakaro and buy groceries, fresh fruits & vegetables, cakes & other bakery items, meats & seafood, cosmetics and baby care products. We get it all delivered at your doorstep within hours. You not only save time but also money with our best prices and offers. We get savings.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="text-wrapper wow fadeInRight" data-wow-delay="0.3s">
						<div>
							<p class="btn btn-subtitle">Update</p>  
							<h3>Intractive</h3>
							<p>Keeraanakaro is here to change the way you shop. We’re an app that connects you to the nearest delivery partner who can make purchases, pick up items from any store in the city and bring them to you.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="img-thumb wow fadeInLeft text-center" data-wow-delay="0.6s">
						<img class="img-fluid single_screen_image" src="<?=$url?>img/screens/screen2.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Features Section End -->   


	<?php require_once('files/screens_slider.php'); ?>

	<?php require_once('files/teams.php'); ?>

	<?php require_once('files/testimonials.php'); ?>

	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>
</body>
</html>