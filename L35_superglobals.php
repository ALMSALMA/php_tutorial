<?php 

	// superglobals

	//$_GET['name'], $_POST['name']

	echo $_SERVER['SERVER_NAME'] . '<br />';        
	echo $_SERVER['REQUEST_METHOD'] . '<br />';     // returns GEt, POST, ...
	echo $_SERVER['SCRIPT_FILENAME'] . '<br />';    // return full path of script
	echo $_SERVER['PHP_SELF'] . '<br />';           // it returns the path of the current script without localhost (for example)

	// $_COOKIE, $_SESSION


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>