<?php

$username = $_POST['username'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$date =$_POST['date'];

$arr = array(
	'username' => $username,
	'latitude' => $latitude,
	'longitude' => $longitude,
	'date' => $date,	
);
if(!is_file('info.json')){
	fopen('info.php');
}
$inp = file_get_contents('info.json');
$tempArray = json_decode($inp);
array_push($tempArray, $arr);
$jsonData = json_encode($tempArray, JSON_NUMERIC_CHECK);
file_put_contents('info.json', $jsonData);

fwrite($myfile, $jsonData);

fclose($myfile);

?>