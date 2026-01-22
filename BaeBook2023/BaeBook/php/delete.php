<?php
session_start();

include("../connection.php");
include '../main/User.php';

// Check if the user is logged in
if (isset($_SESSION['id'])) {
    $user = getUserById($_SESSION['id'], $conn);

    // Check if the ID parameter is set in the URL
    if (isset($_GET['uname'])) {
        // Sanitize the username to prevent SQL injection
        // Ensure you are using the correct connection method based on your setup
        $uname = $conn->quote($_GET['uname']); // If you're using PDO
        // $uname = mysqli_real_escape_string($conn, $_GET['uname']); // If you're using MySQLi

        // Output for debugging purposes
        echo "Username to be deleted: " . $uname;

        // SQL query to delete the record with the specified username
        $sql = "DELETE FROM users WHERE username = $uname";

        // Execute the query
        if ($conn->query($sql)) {
            echo "Record deleted successfully";

            // Redirect back to the main page
            header('Location: ../index.php');
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Invalid request. No username specified.";
    }
} else {
    echo "User not authenticated. Please log in.";
}
?>
