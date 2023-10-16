<?php
include 'connection.php';
$conn = connectToDatabase();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $location = $_POST['location'];
    $streetAddress = $_POST['streetAddress'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipCode'];
    $description = $_POST['description'];

    // Validate form data (you can add more validation as needed)
    if (empty($location) || empty($streetAddress) || empty($city) || empty($zipCode) || empty($description)) {
        // Handle validation errors as needed
        echo "All fields are required.";
    } else {
        // Insert data into the database
        $query1 = "INSERT INTO logform (location, street_address, city, zip_code, description) VALUES ('$location', '$streetAddress','$city','$zipCode', '$description')";
        $stmt=$conn->prepare($query1);

        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

    

        if ($stmt->execute()) {
            // Successful insertion
            echo "Maintenance call submitted successfully.";
        } else {
            // Error in execution
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the database connection (assuming $conn is your database connection object)
    $conn->close();
}  else {
    // If the form is not submitted, redirect to the form page
    // Include the HTML template file here
    include 'HTML_Templates/logCall.html';
    exit();
}
?>
