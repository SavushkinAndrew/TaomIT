<?php
	
	session_start();
	
	$_SESSION['sess_login'] = null;

	$_SESSION['sess_pass'] = null;
	
	header('Location: ../index.php');

	die();
?>