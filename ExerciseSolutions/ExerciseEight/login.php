<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IntroPHP</title>
</head>
<body>
	<form id='login' action='processlogin.php' method='post' accept-charset='UTF-8'>
	<label for='username' >UserName:</label>
	<input type='text' name='username' id='username'  maxlength="50" /> 
	<label for='password' >Password:</label>
	<input type='password' name='password' id='password' maxlength="50" /> 
	<input type='submit' name='Submit' value='Submit' />
	<?php
		require_once("processlogin.php");
	?>
</body>
</html>
