<?php 

	// variable scope

	// local vars

	function myFunc(){
		$price = 10;
		echo $price;
	}

	// myFunc();
	// echo $price;

	function myFuncTwo($age){
		echo $age;
	}

	// myFuncTwo(25);
	// echo $age;

	// global variables

	$name = 'mario';

	function sayHello(){    // using global variable inside function
		global $name;
		$name = 'yoshi';
		echo "hello $name ";
	}

	sayHello();
	echo $name;

	function sayBye(&$name){    // call by reference
		$name = 'wario';
		echo "bye $name ";
	}

	sayBye($name);
	echo $name;


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>