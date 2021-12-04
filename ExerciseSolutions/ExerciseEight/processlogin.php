<?php
	require_once("ValidateUser.php");
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		ValidateUser($username,$password);  // call the function
	} 
?>