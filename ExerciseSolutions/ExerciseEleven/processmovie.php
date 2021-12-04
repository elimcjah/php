<?php
	require_once("movieclass.php");
	require_once("moviecatalogue.php");
	if (! isset($moviecatalogue))
	{
		$movieCatalogue = new MovieCatalogue();
	}
	
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
					$movieCatalogue->InsertMovie($movie);
					foreach ($movieCatalogue as $movieObject)
					{
						print_r($movieObject);
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
	}
    else
	{
		echo "Required data missing";
	}
	
?>