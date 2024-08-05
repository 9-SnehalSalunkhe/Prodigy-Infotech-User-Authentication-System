<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $new_password = $_POST["new_password"];

    // Validate inputs (you may add more validation as needed)
    if (empty($email) || empty($new_password)) {
        // Handle validation errors or show appropriate message
        echo "Email and new password are required.";
        exit;
    }

    // Hash the new password with MD5 (not recommended, use bcrypt or stronger)
    $hashed_password = md5($new_password);

    // Update password in the database
    $sql_update_password = "UPDATE users SET password = ? WHERE email = ?";
    $stmt_update_password = $conn->prepare($sql_update_password);
    $stmt_update_password->bind_param("ss", $hashed_password, $email);
    $stmt_update_password->execute();

    // Check if the update was successful
    if ($stmt_update_password->affected_rows > 0) {
        echo "Password updated successfully.";
    } else {
        echo "Failed to update password.";
    }

    // Close statement and connection
    $stmt_update_password->close();
    $conn->close();

    // Redirect to index.php after a delay
    header("refresh:3; url=index.php"); // Redirect after 3 seconds
    exit;
}
?>
