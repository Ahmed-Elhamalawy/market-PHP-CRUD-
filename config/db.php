// connect to database
<?php

$servername = "localhost";
$username = "Ahmed";
$password = "12345678";
$dbname = "store";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL " ;
    exit();
    }
    echo "Connected successfully";
    ?>