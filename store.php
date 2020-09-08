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


<?php


// $sql = "SELECT id, name FROM vendor_master";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();



?>

	<!-- Blog Section -->
	<section id="blog" class="section">
		<!-- Container Starts -->
		<div class="container">
			<div class="section-header">   
				<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Stores</p> 
				<h2 class="section-title">Keeraana Stores</h2>
			</div>
			<div class="row">

				<div class="col-lg-3 col-md-6 col-xs-12 blog-item">
					<div class="blog-item-wrapper">
						<div class="blog-item-img">
							<img class="img-fluid" src="<?=$url?>img/stores/store1.jpg" alt="">
						</div>
						<div class="blog-item-text">
							<h3 class="text-center">Chacha Ki Dukan</h3>
							<div class="author">
								<span class="name">Adam Shaikh</span>
								<span class="date float-right">Mumbai</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-xs-12 blog-item">
					<div class="blog-item-wrapper">
						<div class="blog-item-img">
							<img class="img-fluid" src="<?=$url?>img/stores/store2.jpg" alt="">
						</div>
						<div class="blog-item-text">
							<h3 class="text-center">Kumar Stores</h3>
							<div class="author">
								<span class="name">Vishal Kumar</span>
								<span class="date float-right">Delhi</span>
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6 col-xs-12 blog-item">
					<div class="blog-item-wrapper">
						<div class="blog-item-img">
							<img class="img-fluid" src="<?=$url?>img/stores/store3.jpg" alt="">
						</div>
						<div class="blog-item-text">
							<h3 class="text-center">Reddy Kirana Stores</h3>
							<div class="author">
								<span class="name">Venkat Reddy</span>
								<span class="date float-right">Hyderabad</span>
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6 col-xs-12 blog-item">
					<div class="blog-item-wrapper">
						<div class="blog-item-img">
							<img class="img-fluid" src="<?=$url?>img/stores/store4.jpg" alt="">
						</div>
						<div class="blog-item-text">
							<h3 class="text-center">Shree Sai Stores</h3>
							<div class="author">
								<span class="name">Mahesh Patil</span>
								<span class="date float-right">Sangli</span>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!-- blog Section End -->



	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>
</body>
</html>