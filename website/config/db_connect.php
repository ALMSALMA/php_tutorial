<?php

    // connect to the database
    $conn = mysqli_connect('localhost', 'teknoclass', 'Teknoclass123', 'teknoclass');	// host, user_name, password, table / db name

    // check connection
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
        }

?>