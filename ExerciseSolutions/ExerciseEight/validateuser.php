<?php

function ValidateUser($username,$password)
{
	$filename = "usercreds.txt";
	if($file = fopen($filename,"r"))
	{
		$creds = fread($file, filesize($filename));
		$data = explode(",", $creds);
		if ($data[0]==$username && $data[1]==$password)
		{
			// change the location of the loginsuccess.php file 
			// to reflect its location on your system.
			header("Location: http://localhost/introphp/exercisesolutions/exerciseeight/loginsuccess.php");
		} 
		else 
		{
			echo "<br><h1>Invalid login attempt. Please try again!</h1><br>";	
		}
	}
	else
	{
	    echo "Error opening file usercreds.txt<br>";
	}
}
?>