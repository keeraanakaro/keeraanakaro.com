<?php require_once('files/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('files/metatags.php'); ?>

	<?php require_once('files/assets_css.php'); ?>
</head>


<style type="text/css">
	p{ color: #000; }
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
						<h2 class="head-title text-center"> Privacy Policy </h2>
						<h6 class="text-center"> KeeraanaKaro Follows Its Policies Strictly</h4>
					</div>
				</div>
			</div> 
		</div>
	</header>



	<div id="features-two" class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-">
					<?php 
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_URL, $keeraana_dashboard_url.'api/user_privacy_policy.html');
					$data = curl_exec($ch);
					curl_close($ch);
					echo $data;?>
				</div>
			</div>
		</div>
	</div>



	<?php require_once('files/subscribe.php'); ?>

	<?php require_once('files/testimonials.php'); ?>

	<?php require_once('files/brands.php'); ?>

	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>
</body>
</html>