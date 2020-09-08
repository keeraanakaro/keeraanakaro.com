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
							Market In Your Pocket
						</h2>
						<div class="header-button">
							<a href="#blog" class="btn btn-border">Explore Stores</a>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</header>


	<section id="blog" class="section">
		<!-- Container Starts -->
		<div class="container">
			<div class="section-header">   
				<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Stores</p> 
				<h2 class="section-title">Keeraana Stores</h2>
			</div>
			<div class="row">

				<?php
				$sql = "SELECT name, shop_name, image, vendor_number FROM vendor_master";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {

						echo '
						<div class="col-lg-3 col-md-6 col-xs-12 blog-item">
						<div class="blog-item-wrapper">
						<div class="blog-item-img">
						<img class="img-fluid" src="'.$keeraana_dashboard_url.'/images/vendors/'.$row["image"].'" alt="">
						</div>
						<div class="blog-item-text">
						<h3 class="text-center">'.strtoupper($row["shop_name"]).'</h3>
						<div class="author text-center">
						<span class="name">'.ucwords($row["name"]).'</span>
						</div>
						</div>
						</div>
						</div>';

					}
				}
				$conn->close();
				?>

			</div>
		</div>
	</section>


	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>
</body>
</html>