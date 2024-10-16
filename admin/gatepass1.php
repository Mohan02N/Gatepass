<?php
include("db_connect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $gid = $_POST['gid'];
    $order_status = $_POST['order_status'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE students SET status = ? WHERE gid = ?");
    $stmt->bind_param("si", $order_status, $gid); // Assuming gid is an integer

    // Execute the statement
    if ($stmt->execute()) {
        echo '<script> alert("Gatepass Updated");
        window.location.href ="gatepass.php";</script>';
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
 