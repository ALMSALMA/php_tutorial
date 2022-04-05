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
    <h2>Lecture 6 (Numbers)</h2>
    <a href="/php_tutorial/numbers.php">Click here to see content</a>
    <div>
        <?php   
            $radius = 3;
            $pi = 3.14;

            // basic operators - *, /, +, -, **(power)

            echo $pi * $radius**2;      echo '<br/>';

            // order of operation (Brackets I(like power) D M A S)

            echo 2 * (4 + 5) / 3;       echo '<br/>';

            // increment & decrement operators

            echo $radius++;             echo '<br/>';
            echo $pi--;                 echo '<br/>';

            // shorthand operations

            $age += 10; // age becomes 30
            $age -= 3;  // age becomes 25
            $age *= 2;  // age becomes 50

            echo $age;                  echo '<br/>';

            // number functions

            echo floor($pi);            echo '<br/>';
            echo ceil($pi);             echo '<br/>';
            echo pi();                  echo '<br/> <br/>';
        ?>
    </div>

</body>
</html>