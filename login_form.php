<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
    include 'connection.php';
    $conn = connectToDatabase();
    
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data (you can add more validation as needed)
    if (empty($email) || empty($password)) {
        // Handle validation errors as needed
        echo "Both email and password are required.";
    } else {
        // Use prepared statements to prevent SQL injection
        $query = "SELECT * FROM adminlogin WHERE email = '$email'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if ($user && password_verify($password, $user['password'])) {
            // User login successful, redirect to the desired page
            header("Location: index.php");
            exit();
        } else {
            // Incorrect credentials, handle it as needed (display error message, redirect, etc.)
            echo "Incorrect email or password. Please try again.";
        }
    }

    // Close the database connection (assuming $conn is your database connection object)
    $conn->close();
} else {
    // If the form is not submitted, include the login form
    include 'HTML_Templates/login.html';
}
?>
