<?php

if ( $_SERVER['HTTP_HOST'] == 'localhost') {
	$url = 'http://'.$_SERVER['HTTP_HOST'].'/keeraanakaro.com/';
}else{
	$url = 'https://keeraanakaro.com/';
}

$title = 'Keeraanakaro | Grocery Delivery services';
$description = 'Keeraanakaro is an delivery services organization based in India. Focusing on Fast, Effective and Efficient Delivery.';
$playstore = 'https://play.google.com/store/apps/details?id=com.keeraanakaro.user';
$applestore = 'https://apps.apple.com/in/app/keeraanakaro/id1524161506';

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

?>