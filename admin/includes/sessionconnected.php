<?php
	include './class/app.php';
	session_start();

	if(!isset($_SESSION['CodeUser']) || trim($_SESSION['CodeUser']) == ''){
		header('location: ./index.php');
		exit();
	}

	$conn = $app->getPDO();
	$id = $_SESSION['CodeUser'];
	$sql = "SELECT * FROM t_user WHERE CodeUser=$id";
	$req = $app->fetch($sql);
	

?>