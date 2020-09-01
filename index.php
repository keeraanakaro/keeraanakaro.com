<?php require_once('files/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Proton - Bootstrap 4 Template</title>

	<?php require_once('files/metatags.php'); ?>

	<?php require_once('files/assets_css.php'); ?>

</head>


<body>

	<header id="home" class="hero-area-2">
		<div class="overlay"></div>
		
		<?php require_once('files/navbar.php'); ?>
		
		<div class="container">      
			<div class="row space-100">
				<div class="col-lg-8 col-md-12 col-xs-12">
					<div class="contents">
						<h2 class="head-title">ONE SOLUTION FOR ALL YOUR GROCERY NEEDS</h2>
						<p>Whatever you want, we get it. Order delivery for yourself or with friends and watch in real-time as your Keeraanakaro brings you all the things you love.</p>
						<div class="header-button">
							<a href="<?=$applestore?>" target="_blank" data-toggle="tooltip" title="Download on Appstore" class="btn btn-border-filled"> <i class="lni-apple"></i> Apple Appstore</a>
							<a href="<?=$playstore?>" target="_blank" data-toggle="tooltip" title="Download on Playstore" class="btn btn-border-filled"> <i class="lni-android"></i> Google Playstore</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12">
					<div class="intro-img">
						<img src="<?=$url?>img/screens/double_screen1.png" alt="" class="double_screen_image" >
					</div>
				</div>
			</div> 
		</div>
	</header>



	<!-- Start Video promo Section -->
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
	<!-- End Video Promo Section -->

	<!-- Features Section Start -->
	<div id="features-two" class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="img-thumb wow fadeInLeft text-center" data-wow-delay="0.3s">
						<img class="img-fluid single_screen_image" src="<?=$url?>img/screens/screen6.png" alt="">
					</div>
				</div>
				<div class="col-lg-7 col-md-12 col-sm-12">
					<div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s"><br>
						<h3>Grocery Market in Your Pocket</h3>
						<p>Faster shopping with a whole new way to search and navigate. Shop your last order again with just one click. Check out easily - just one step!</p>
						<br>
						<p>Fast Shipping - Our store offers fast worldwide shipping to all customers regardless of what and how much you order.</p>
						<br>
						<p>Great Daily Deals & Discounts. Get daily and weekly deals and offers on all products</p>
						<a class="btn btn-rm" href="<?=$url?>features.php">
							Read More <i class="lni-arrow-right"></i>
						</a>
						<br><br>
						<a href="<?=$applestore?>" target="_blank" data-toggle="tooltip" title="Download on Appstore" class="btn btn-subtitle"> <i class="lni-apple"></i> Apple Appstore</a>
						<a href="<?=$playstore?>" target="_blank" data-toggle="tooltip" title="Download on Playstore" class="btn btn-subtitle"> <i class="lni-android"></i> Google Playstore</a>
					</div>
				</div>
			</div>
			<div class="row mt">
				<div class="col-lg-7 col-md-12 col-sm-12">
					<div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
						<div>
							<p class="btn btn-subtitle">Our Mission</p>  
							<h3>Our mission is to enable anything delivered on demand.</h3>
							<p>Keeraanakaro is transforming the way goods move around cities through our revolutionary APP that connects customers with local groceries where you can order your items and get in minutes. We empower communities to shop local and empower businesses to grow through our APP.</p>
							<a class="btn btn-rm" href="<?=$url?>about.php">
								Read More <i class="lni-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="img-thumb wow fadeInLeft text-center" data-wow-delay="0.3s">
						<img class="img-fluid single_screen_image" src="<?=$url?>img/screens/screen9.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Features Section End -->   


	<?php require_once('files/subscribe.php'); ?>


	<?php require_once('files/screens_slider.php'); ?>


	<!-- Features Section Start -->
	<div id="features-two" class="section">
		<div class="container">
			
			<div class="row mt">
				<div class="col-lg-7 col-md-12 col-sm-12">
					<div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
						<div>
							<p class="btn btn-subtitle">About KeeraanaKaro</p>  
							<h3>About Keeraanakaro</h3>
							<p>We feature a great selection of high-quality merchandise, friendly service and, of course, Every Day Low Prices. We also have another goal: to bring you the best shopping experience on the Internet.</p>
							<a class="btn btn-rm" href="<?=$url?>about.php">
								Read More <i class="lni-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="img-thumb wow fadeInLeft text-center" data-wow-delay="0.3s">
						<img class="img-fluid single_screen_image" src="<?=$url?>img/screens/screen1.png" alt="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="img-thumb wow fadeInLeft text-center" data-wow-delay="0.3s">
						<img class="img-fluid single_screen_image" src="<?=$url?>img/screens/screen4.png" alt="">
					</div>
				</div>
				<div class="col-lg-7 col-md-12 col-sm-12">
					<div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
						<div>
							<p class="btn btn-subtitle">Why KeeraanaKaro?</p>  
							<h3>Why should I use Keeraanakaro APP?</h3>
							<p>Keeraanakaro allows you to walk away from the drudgery of grocery shopping and welcome an easy relaxed way of browsing and shopping for groceries. Discover new products and shop for all your food and grocery needs from the comfort of your home or office. No more getting stuck in traffic jams, paying for parking, standing in long queues and carrying heavy bags – get everything you need, when you need, right at your doorstep. Food shopping online is now easy as every product on your monthly shopping list, is now available online at keeraanakaro India’s best online grocery store.</p>
							<a class="btn btn-rm" href="<?=$url?>about.php">
								Read More <i class="lni-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Features Section End -->   


	<?php require_once('files/subscribe.php'); ?>


	<section id="team" class="section">
		<div class="container">
			<div class="section-header">   
				<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Team</p>       
				<h2 class="section-title">Strong Pillars of KeeraanaKaro</h2>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="single-team wow fadeInUp" data-wow-delay="0.2s">
						<div class="team-thumb">
							<img src="<?=$url;?>img/team/Nachiket_shah_keeraanakaro.jpeg" alt="Nachiket Shah">
							<ul class="social-list">
								<li class="linkedin">
									<a href="https://www.linkedin.com/in/nachiketshah325" target="_blank">
										<i class="lni-linkedin-fill"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="team-details text-center">
							<div class="team-inner">
								<h4 class="team-title">Nachiket Shah</h4>
								<p>Chief Marketing Officer</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="single-team wow fadeInUp" data-wow-delay="0.2s">
						<div class="team-thumb">
							<img src="<?=$url;?>img/team/Nikhil_suryawanshi_keeraanakaro.jpeg" alt="Nikhil Suryavanshi">
							<ul class="social-list">
								<li class="linkedin">
									<a href="https://www.linkedin.com/in/nikhil-r-suryawanshi-291ba87a" target="_blank">
										<i class="lni-linkedin-fill"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="team-details text-center">
							<div class="team-inner">
								<h4 class="team-title">Nikhil Suryavanshi</h4>
								<p>Chief Executive Officer</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="single-team wow fadeInUp" data-wow-delay="0.2s">
						<div class="team-thumb">
							<img src="<?=$url;?>img/team/Preetham_gowda_keeraanakaro.jpeg" alt="Preetham Gowda">
							<ul class="social-list">
								<li class="linkedin">
									<a href="https://www.linkedin.com/in/preetham-gowda-305495144" target="_blank">
										<i class="lni-linkedin-fill"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="team-details text-center">
							<div class="team-inner">
								<h4 class="team-title">Preetham Gowda</h4>
								<p>Chief Operating Officer</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php require_once('files/testimonials.php'); ?>

	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>

</body>
</html>