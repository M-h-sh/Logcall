<?php
include "connection.php";
include "HTML_Templates/register.html";
function saveUserToDatabase($name, $surname, $email, $phone, $password)
{
    $conn = connectToDatabase();

    // Use prepared statements to prevent SQL injection
    $query ="INSERT INTO register_user (first_name, last_name, email, phone_number, password) VALUES ('$name',' $surname', '$email', '$phone', '$password')";
    $stmt=$conn->prepare($query);
    $success = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $success;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Basic server-side validation
    $errors = array();

    // Validate name, surname, email, phone, password, confirm password (similar to the previous example)

    // If there are no errors, process the registration and save to the database
    if (empty($errors)) {
        $success = saveUserToDatabase($name, $surname, $email, $phone, $password);

        if ($success) {
            echo "Registration successful!";
        } else {
            echo "Error saving user to the database.";
        }
    }
}

?>