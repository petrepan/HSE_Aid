<?php
    //create connection
   $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

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

        // sql to create table
    $sql = "CREATE TABLE emails (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
    echo "Table emails created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>