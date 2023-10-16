<?php
include 'HTML_Templates/edit.html';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
    include 'connection.php';
    $conn = connectToDatabase();

    // Check which form was submitted
    if (isset($_POST['editUserDetailsForm'])) {
        // Handle user details form submission
        $id = $_POST['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Validate and update in the database
        if (validateUserDetailsForm($name, $surname, $email, $phone)) {
            $query = "UPDATE register_user SET name='$name', surname='$surname', email='$email', phone='$phone' WHERE id='$id'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $stmt->close();

            // Redirect or display success message as needed
            header("Location: success.php");
            exit();
        }
    } elseif (isset($_POST['editLogForm'])) {
        // Handle log form submission
        $id = $_POST['id'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $streetAddress = $_POST['streetAddress'];
        $city = $_POST['city'];
        $zipCode = $_POST['zipCode'];

        // Validate and update in the database
        if (validateLogForm($description, $location, $streetAddress, $city, $zipCode)) {
            $query = "UPDATE register_user SET description='$description', location='$location', street_address='$streetAddress', city=$city', zip_code='$zipCode' WHERE id='$id'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $stmt->close();

            // Redirect or display success message as needed
            header("Location: success.php");
            exit();
        }
    }

    // Close the database connection (assuming $conn is your database connection object)
    $conn->close();
}

// Validation functions
function validateUserDetailsForm($name, $surname, $email, $phone) {
    // Implement your validation logic here
    // Return false if validation fails
    return true;
}

function validateLogForm($description, $location, $streetAddress, $city, $zipCode) {
    // Implement your validation logic here
    // Return false if validation fails
    return true;
}
?>
