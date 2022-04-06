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
    <title>PHP Tutorial</title>
</head>
<body>
    <h1><?php echo 'This is php turtorial!';?></h1>

    <h2>Lecture 4</h2>
    <div><?php echo $name.' ';  echo SURNAME.' ';   echo $age. '<br/> <br/>'; ?></div>

    <h2>Lecture 5 (Strings)</h2>
    <a href="/php_tutorial/L5_strings.php">Click here to see content</a>

    <h2>Lecture 6 (Numbers)</h2>
    <a href="/php_tutorial/L6_numbers.php">Click here to see content</a>

    <h2>Lecture 7-8 (Arrays)</h2>
    <a href="/php_tutorial/L7_arrays.php">Click here to see content</a>

    <h2>Lecture 9 (Loops)</h2>
    <a href="/php_tutorial/L9_loops.php">Click here to see content</a>
    
    <h2>Lecture 10 (Booleans & Comparisons)</h2>
    <a href="/php_tutorial/L10_bools&comps.php">Click here to see content</a>
    
    <h2>Lecture 11 (Conditions)</h2>
    <a href="/php_tutorial/L11_conditions.php">Click here to see content</a>
    
    <h2>Lecture 13 (Functions)</h2>
    <a href="/php_tutorial/L13_functions.php">Click here to see content</a>
    <!-- in php inside "" it consider $var as variable and prints out its value 
         BUT it doesn't recognize $var['value'] so we have to write it as {$var['value']} 
             to recognize it as variable-->
    
    <h2>Lecture 14 (Variable Scope)</h2>
    <a href="/php_tutorial/L14_variable_scope.php">Click here to see content</a>
    <!-- global variables and call by reference -->

    <!-- we can use include('') / include '' => this includes file and if there is error it still load the page
                    require('') / require '' => this includes file and if there is error it prevent loading the page-->
    
    <h2>Lecture 16 (Website)</h2>
    <a href="/php_tutorial/website/Teknoclass.php">Click here to see content</a>
    
</body>
</html>