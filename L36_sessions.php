<?php 

	if(isset($_POST['submit'])){

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: website/Teknoclass.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>