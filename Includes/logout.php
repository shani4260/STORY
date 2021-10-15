<?php
	require_once('init.php');
	global $session;
	$username = $session->username;
	setcookie("username", $username , time() + (60 * 5) );

	$session->logout();
	header('Location:login.php');

?>