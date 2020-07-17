<?php
    //create connection
   $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

// $server = "localhost";
// $username = "root";
// $password = "123456";
// $db = "newsletter";

    $conn = mysqli_connect($server, $username, $password, $db);

    //check connection
    if(mysqli_connect_errno()){
        //connection failed
        echo 'Failed to connect to MySQL'. mysqli_connect_errno();
    }

?>