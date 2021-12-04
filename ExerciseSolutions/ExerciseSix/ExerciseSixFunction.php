<?php

function ValidateUser($testuser,$testpassword)
{
	$usernames = array("zsmith" =>"devious","rtam"=>"simon","q" => "continuum","kirk" => "primedirective","sconnor" => "fatethatwemake");
	
	foreach ($usernames as $user => $password)
	{
		if ($user == $testuser)
		{
			if ($password == $testpassword)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
}
?>