<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "event"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    // Prepare SQL statement to fetch user details
    $stmt = $conn->prepare("SELECT * FROM admin WHERE mobile = ?");
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if ($password === $row["password"]) {
            // Start a session and set session variables
            session_start();
            $_SESSION["mobile"] = $row["mobile"];
            $_SESSION["firstname"] = $row["firstname"];

            // Redirect to a secure page after successful login
            header("Location: index.php");
            exit();
        } else {
            // Password incorrect
            echo '<script> alert("Invalid password. Please try again.")
            window.location.href = "login.php"</script>';
        }
    } else {
        // Username or mobile number not found
        echo '<script> alert("Invalid Mobile Number. Please try again.")
        window.location.href = "login.php"</script>';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
