<?php
session_start();

$gNaam =  $_POST['gNaam'];
$ww = $_POST['ww'];

if($gNaam != null && $ww != null){
	$_SESSION['login'] = true;
	$_SESSION['user'] = $gNaam;
	
	echo 'Succes!';
} else{
	echo 'Mislukt';
}
?>