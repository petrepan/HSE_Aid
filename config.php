<?php
    //create connection
    $host = 'localhost';
    $user = 'root';
    $pass = '123456';
    $db = 'newsletter';

    $conn = mysqli_connect($host, $user, $pass, $db);

    //check connection
    if(mysqli_connect_errno()){
        //connection failed
        echo 'Failed to connect to MySQL'. mysqli_connect_errno();
    }