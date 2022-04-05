<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    <h1><?php echo 'This is php turtorial!';?></h1>

    <h2>Lecture 7 (Arrays)</h2>
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

            // multidimensional array

            $blogs = [
                ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
                ['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
                ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
            ];

            print_r($blogs);                echo '<br/>'; 
            print_r($blogs[2]);             echo '<br/>'; 
            echo $blogs[1]['title'];        echo '<br/>'; 
            echo count($blogs);             echo '<br/>'; 

            $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem'];
            print_r($blogs);                echo '<br/>'; 

            $popped = array_pop($blogs);
            print_r($popped);               echo '<br/>'; 

        ?>
    </div>
</body>
</html>