<!--Exercise Three Solution-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise Three Solution</title>
</head>
<body>

	<?php
		$UserName = "kirk";
		$Password = "primedirective";

		$testuser = "picard";
		$testpassword = "makeitso";
		
		if ($testuser == $UserName && $testpassword == $Password)
		{
			echo "Live long and prosper!<br>";
		}
		else
		{
			echo "Please try again<br>";
		}
	
		// or
				
		if ($testuser == $UserName)
		{
			if ($testpassword == $Password)
			{
				echo "Live long and prosper!<br>";
			}
			else
			{
				echo "Please try again<br>";
			}
		}
		else
		{
			echo "Please try again<br>";			
		}
		
	

		?>

</body>
</html>