<?php
function connectToDatabase()
{
    $host = "localhost"; // Change to your database host
    $username = "root"; // Change to your database username
    $password = ""; // Change to your database password
    $database = "logcall"; // Change to your database name

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>