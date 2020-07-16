<?php
    //create connection
   $url = parse_url(getenv("mysql://b0437c18462dab:1feb0731@us-cdbr-east-02.cleardb.com/heroku_b4005582b15fe80?reconnect=true"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = mysqli_connect($server, $username, $password, $db);

    //check connection
    if(mysqli_connect_errno()){
        //connection failed
        echo 'Failed to connect to MySQL'. mysqli_connect_errno();
    }