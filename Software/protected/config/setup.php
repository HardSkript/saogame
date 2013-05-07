<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'saogame';
if($con	= mysqli_connect($dbhost,$dbuser,$dbpass)){
	if(@mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
			
		
		
	}else{
		$sql="CREATE DATABASE {$dbname} CHARACTER SET utf8 COLLATE utf8_general_ci";
		if(mysqli_query($con,$sql)){
			header($_SERVER['PHP_SELF']);
		}
	}
}


?>