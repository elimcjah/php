<!-- Exercise Ten -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise Ten</title>
</head>
<body>
	<form id='movie' action='processmovie.php' method='post' accept-charset='UTF-8'>
	<label for='text' >Movie Title:</label>
	<input type='text' name='movietitle' id='movietitle'  maxlength="50" /><br> 
	<label for='director' >Director:</label>
	<input type='text' name='director' id='director' maxlength="50" /> <br>
	<label for='year' >Year:</label>
	<input type='text' name='year' id='year'  maxlength="50" /> <br>
	<label for='rating' >MPAA Rating:</label>
	<input type='text' name='rating' id='rating' maxlength="50" /> <br>
	<input type='submit' name='Submit' value='Submit' />
	<?php
		require_once("processmovie.php");
	?>
</body>
</html>
