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
    <h2>Lecture 5 (Strings)</h2>
    <a href="/php_tutorial/strings.php">Click here to see content</a>
    <div>
        <?php   
            $stringOne = 'My email is ';  
            $stringTwo = 'moh.almsalma@gmail.com';
            echo $stringOne . $stringTwo . '<br/>';

            echo 'Hey my name is '.$name. '<br/>'; 
            echo "Hey my name is $name <br/>";        // Variable interpolation
            // Difference between '' and "" is in "" we can use variables directly where in '' it takes it as string

            echo "I screamed \"WHAAAA\" <br/>";
            echo 'I screamed "WHAAA" <br/>';

            echo $name[3] . '<br/>';

            echo strlen($name). '<br/>';
            echo strtoupper($name). '<br/>';
            echo strtolower($name). '<br/>';
            echo str_replace('m', 'n', $name). '<br/> <br/>';   // Output will be Mohannad => upper or lower case is important
        ?>
    </div>
</body>
</html>