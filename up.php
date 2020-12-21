<?php

$string = '';

if (isset($_POST['upload'])){
	if ($_POST['password'] == '1234') {
		$string = exec("git pull");
	}else{
		$string = 'Wrong Password';
	}
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
</head>

<body>
	<form class="form-signin" action="up.php" method="post" >
		<div class="text-center mb-5">
			<h6>Portal for secure file upload to server.</h6>
		</div>

		<div class="text-center">
			<h1>KEERAANAKARO.COM</h1>
			<a href="//<?=$_SERVER["HTTP_HOST"]?>">ORIGINAL SITE</a>
		</div>

		<br>
		<p class="text-center" style="font-size:12px;color:#777;">Enter Todays Password to Upload Files</p>
		<div class="form-label-group">
			<input type="text" id="inputPassword" class="form-control" placeholder="Password" name="password" pattern="\d{4}" maxlength="4" autofocus required autocomplete="off" >
			<label for="inputPassword">Password</label>
		</div>

		<p class="text-center" style="font-size:12px;color:#777;">All Activities on this Page are Tracked & Monitored</p>
		<input class="btn btn-lg btn-success btn-block" type="submit" name="upload" value="UPLOAD">		

		<p class="mt-5 bt-5 text-muted text-center"><?=$string?></p>

	</form>
</body>
</html>
