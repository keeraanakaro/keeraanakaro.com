<?php require_once('files/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('files/metatags.php'); ?>

	<?php require_once('files/assets_css.php'); ?>
</head>


<body>

	<?php require_once('files/below_body.php'); ?>

	<header id="home" class="hero-area-2">
		<div class="overlay"></div>
		
		<?php require_once('files/navbar.php'); ?>
		
		<div class="container">      
			<div class="row space-100">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="contents">
						<h2 class="head-title text-center">Get all applications</h2>

						<div class="header-button text-center">
							
							<a href="<?=$playstore?>" target="_blank" data-toggle="tooltip" title="Download on Playstore" class="btn btn-border-filled"> <i class="lni-android"></i> User App</a>

							<a href="<?=$playstore_vendor?>" target="_blank" data-toggle="tooltip" title="Download on Playstore" class="btn btn-border-filled" style="background-color:#fdf0ab;" > <i class="lni-android"></i> Vendor App</a>

						</div>

						<hr>

						<div class="header-button text-center">
							<a href="<?=$applestore?>" target="_blank" data-toggle="tooltip" title="Download on Appstore" class="btn btn-border-filled"> <i class="lni-apple"></i> iOS User App</a>
						</div>


					</div>
				</div>
			</div> 
		</div>
	</header>



	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>

</body>
</html>