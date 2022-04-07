<?php 
    // echo 'This is php tutorial';  

    $name = "Mohammad";
    $age = "23";
    define('SURNAME', 'AL MSALMA');     // define constant variable
    //  define('SURNAME', 'TEST');      // Will give error! -> cannot redefine a constant

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TeknoClass</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
    form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
	.employee{
		width: 100px;
		margin: 40px auto -30px;
		display: block;
		position: relative;
		top: -30px;
    }
  </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo center brand-text">PHP TUTORIAL</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 5</h4>
                        <h5>Strings</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L5_strings.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L5_strings.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 6</h4>
                        <h5>Numbers</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L6_numbers.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L6_numbers.php">
                        See output</a>
                    </div>
                </div>
            </div>
            
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 7-8</h4>
                        <h5>Numbers</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L7_arrays.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L7_arrays.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 9</h4>
                        <h5>Loops</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L9_loops.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L9_loops.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 10</h4>
                        <h5>Booleans & Comparisons</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L10_bools&comps.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L10_bools&comps.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 11</h4>
                        <h5>Booleans & Comparisons</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L11_conditions.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L11_conditions.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 13</h4>
                        <h5>Functions</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L13_functions.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L13_functions.php">
                        See output</a>
                    </div>
                </div>
            </div>
             <!-- in php inside "" it consider $var as variable and prints out its value 
                BUT it doesn't recognize $var['value'] so we have to write it as {$var['value']} 
                to recognize it as variable-->

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 14</h4>
                        <h5>Variable Scope</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L14_variable_scope.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L14_variable_scope.php">
                        See output</a>
                    </div>
                </div>
            </div>
            <!-- global variables and call by reference -->

            <!-- we can use include('') / include '' => this includes file and if there is error it still load the page
                    require('') / require '' => this includes file and if there is error it prevent loading the page-->
        
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 16-34</h4>
                        <h5>Website</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/website">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/website/Teknoclass.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 35</h4>
                        <h5>Super Globals</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L35_superglobals.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L35_superglobals.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 36</h4>
                        <h5>Sesssions</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L36_sessions.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L36_sessions.php">
                        See output</a>
                    </div>
                </div>
            </div>
            <!-- see also changes in header.php -->
            <!-- $name = $_SESSION['name'] ?? 'Mohammad';		// Null Coalescing -->

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 38</h4>
                        <h5>Cookies</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L38_cookies.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L38_cookies.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 39_40</h4>
                        <h5>File Systems</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L39_file_systems.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L39_file_systems.php">
                        See output</a>
                    </div>
                </div>
            </div>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h4>Lecture 41-42</h4>
                        <h5>Classes</h5>
                    </div>
                    <div class="card-action center">
                        <a class="btn brand z-depth-0 center" target="_blank" href="https://github.com/ALMSALMA/php_tutorial/blob/master/L41_classes.php">
                        See code</a>
                        <a class="btn brand z-depth-0 center" href="/php_tutorial/L41_classes.php">
                        See output</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>