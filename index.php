<?php
// Include your database connection code here
include 'connection.php';
$conn = connectToDatabase();
$sql = "SELECT * FROM logform WHERE id=0";
$result = $conn->query($sql);

// Store the logged calls in an array
$loggedCalls = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $loggedCalls[] = $row;
    }
}
$conn = connectToDatabase();
include 'HTML_Templates/view.html';
?>
