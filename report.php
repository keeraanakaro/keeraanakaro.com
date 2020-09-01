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
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="contents text-center">
						<h2 class="head-title text-center">
							Report Fraud / Misconduct
						</h2>
						<p class="text-center">This reporting medium provides an opportunity to report your concerns related to suspected fraud / violation of the Code of Conduct (COC) of KeeraanaKaro.</p>
					</div>
				</div>
			</div> 
		</div>
	</header>


	<!-- Contact Section Start -->
	<section id="contact">      
		<div class="contact-form">
			<div class="container">
				<div class="row justify-content-center"> 
					<div class="offset-top">
						<div class="col-lg-12 col-md-12 col-xs-12">
							<div class="contact-block wow fadeInUp" data-wow-delay="0.2s">
								<div class="section-header">   
									<h2 class="section-title">Love to Hear From You</h2>
									<p style="color:#ff0c00;" >For any concern / complaint relating to your order, please visit our <a href="<?=$url?>help.php" target="_blank" >Help Page</a> for resolution.</p>
								</div>
								<form id="contactForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" data-toggle="tooltip" title="Your Name" placeholder="Your Name" required data-error="Please enter your name">
												<div class="help-block with-errors"></div>
											</div>                                 
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" id="email" class="form-control" name="name" data-toggle="tooltip" title="Your Email Address" placeholder="Your Email Address" required data-error="Please enter your email">
												<div class="help-block with-errors"></div>
											</div> 
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" id="mobile" class="form-control" name="mobile" data-toggle="tooltip" title="Your Mobile Number" placeholder="Your Mobile Number" required data-error="Please enter your Mobile Number">
												<div class="help-block with-errors"></div>
											</div> 
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" id="city" class="form-control" name="city" data-toggle="tooltip" title="Your City" placeholder="Your City" required data-error="Please enter your City">
												<div class="help-block with-errors"></div>
											</div> 
										</div>

										<div class="col-md-12">
											<div class="form-group"> 
												<textarea class="form-control" id="message" data-toggle="tooltip" title="Enter Description" placeholder="Enter Description" rows="7" data-error="Write your message" required></textarea>
												<div class="help-block with-errors"></div>
											</div>

											<p style="font-size:.8em;"><i>*KeeraanaKaro expects that reports made through this channel are made in good faith and are legitimate concerns that you believe should be investigated.<br> All reports submitted will be given careful attention</i></p><br>

											<div class="submit-button">
												<button class="btn btn-common btn-effect" id="submit" type="submit">Submit</button>
												<div id="msgSubmit" class="h3 hidden"></div> 
												<div class="clearfix"></div> 
											</div>
										</div>
									</div>            
								</form>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>        
	</section>
	<!-- Contact Section End -->

	<?php require_once('files/footer.php'); ?>

	<?php require_once('files/assets_js.php'); ?>
	
</body>
</html>