<?php
//db.php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "crud_tutorial";

// creating connection
$conn = new mysqli($host, $user, $password, $db_name);

// check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>