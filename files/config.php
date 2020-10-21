<?php


if ( $_SERVER['HTTP_HOST'] == 'localhost') {
	$url = 'http://'.$_SERVER['HTTP_HOST'].'/keeraanakaro.com/';
	$keeraana_dashboard_url = 'http://localhost/keeraana/';
	$db_password = 'x';
}else{
	$url = 'https://keeraanakaro.com/';
	$keeraana_dashboard_url = 'https://virajify.com/keeraana/';
	$db_password = 'MahitNahi#1234a';
}

$title = 'Keeraanakaro | Grocery Delivery services';
$description = 'Keeraanakaro is an delivery services organization based in India. Focusing on Fast, Effective and Efficient Delivery.';
$playstore = 'https://play.google.com/store/apps/details?id=com.keeraanakaro.user';
// $applestore = 'https://apps.apple.com/in/app/keeraanakaro/id1524161506';
$applestore = 'comming_soon.php';

$servername = "localhost";
$username = "root";
$dbname = "keeraana";

$conn = new mysqli($servername, $username, $db_password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

?>
