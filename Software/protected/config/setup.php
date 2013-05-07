<?php
/**
 * Construção do banco de dados automatizado.
 */
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'saogame';
if($con	= mysqli_connect($dbhost,$dbuser,$dbpass)){
	if(@mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
			
		echo '[check-in do banco de dados]';
		
	}else{
		$sql="CREATE DATABASE {$dbname} CHARACTER SET utf8 COLLATE utf8_general_ci";
		if(mysqli_query($con,$sql)){
			header($_SERVER['PHP_SELF']);
		}else{
			die('Impossível continuar, verifique seu banco de dados, ou contate um dos desenvolvedores do projeto.');
		}
	}
}else{
	die('Impossível continuar, verifique seu banco de dados, ou contate um dos desenvolvedores do projeto.');
}


?>