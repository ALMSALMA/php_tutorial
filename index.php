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

    <h2>Video Number 4</h2>
    <div><?php echo $name.' ';  echo SURNAME.' ';   echo $age. '<br/> <br/>'; ?></div>

    <h2>Video Number 5 (Strings)</h2>
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

    <h2>Video Number 6 (Numbers)</h2>
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

    <h2>Video Number 7 (Arrays)</h2>
    <div>
        <?php   
            // indexed arrays
            $peopleOne = ['Mohammad', 'Ahmad', 'Abdulhamid'];
            echo $peopleOne[1];         echo '<br/>';

            $peopleTwo = array('Aliz', 'Braa');
            echo $peopleTwo[1];         echo '<br/>';

            $ages = [30, 40, 50, 60];
            // echo $ages;      // gives error because the array type is not string
            print_r($ages);         echo '<br/>';         

            $ages[1] = 13;
            print_r($ages);         echo '<br/>';         

            $ages[] = 35;
            array_push($ages, 23);
            print_r($ages);         echo '<br/>';         

            array_pop($ages);
            print_r($ages);         echo '<br/>';         

            echo count($ages);      echo '<br/>';

            $peopleThree = array_merge($peopleOne, $peopleTwo);
            print_r($peopleThree);         echo '<br/>';          

            // associative array (key & value pairs)

            $details = ['name' => 'Mohammad', 'age' => '23', 'Degree' => 'Bachelor'];
            echo $details['name'];      echo '<br/>';
            print_r($details);          echo '<br/>';

            $moredetails = array('University' => 'Karabuk', 'Faculty' => 'Engineering');
            print_r($moredetails);      echo '<br/>'; 

            $moredetails['Department'] = 'Electrical and Electronics Engineering';

            echo count($moredetails);   echo '<br/>'; 

            $ninjasThree = array_merge($details, $moredetails);
            print_r($ninjasThree);      echo '<br/><br/>'; 

        ?>
    </div>
</body>
</html>