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
							Contact Keeraana
						</h2>
						<p class="text-center">We are always happy to help you.</p>
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
								</div>
								<form id="contactForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
												<div class="help-block with-errors"></div>
											</div>                                 
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
												<div class="help-block with-errors"></div>
											</div> 
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" placeholder="Subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group"> 
												<textarea class="form-control" id="message" placeholder="Message" rows="7" data-error="Write your message" required></textarea>
												<div class="help-block with-errors"></div>
											</div>
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