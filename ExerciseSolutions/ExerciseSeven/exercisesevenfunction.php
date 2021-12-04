<?php

function ValidateUser($username,$password)
{
	$filename = "usercreds.txt";
	if($file = fopen($filename,"r"))
	{
		$creds = fread($file, filesize($filename));
		$data = explode(",", $creds);
		while (!feof($file))
		{
			if ($data[0]==$username && $data[1]==$password)
			{
				return true;
			} 
			else 
			{
				return false;	
			}
		}
	}
	else
	{
	    echo "Error opening file usercreds.txt<br>";
	}
}
?>