<?php
    //create connection
    $host = 'localhost';
    $user = 'b0437c18462dab';
    $pass = '1feb0731';
    $db = 'newsletter';

    $conn = mysqli_connect($host, $user, $pass, $db);

    //check connection
    if(mysqli_connect_errno()){
        //connection failed
        echo 'Failed to connect to MySQL'. mysqli_connect_errno();
    }