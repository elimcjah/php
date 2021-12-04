<?php
	require_once("movieclass.php");
	if(!empty($_POST['movietitle']))
	{
		if (!empty($_POST['director']))
		{
			if (!empty($_POST['year']))
			{
				  if (!empty($_POST['rating']))
				  {
					$movietitle = trim($_POST['movietitle']);
					$director = trim($_POST['director']);
					$year = trim($_POST['year']);
					$rating = trim($_POST['rating']);
					$movie = new Movie($movietitle,$director,$year,$rating);
					echo $movie->GetTitle() . "<br>" . $movie->GetDirector() . "<br>" . $movie->GetYear() . "<br>" . $movie->GetRating();
				  }
				  else
				  {
					echo "Required data missing";
				  }
			}
		    else
			{
				echo "Required data missing";
			}
		}
 	    else
		{
			echo "Required data missing";
		}
	}
    else
	{
		echo "Required data missing";
	}
	
?>