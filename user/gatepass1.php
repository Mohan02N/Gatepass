<?php
// Database configuration
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "event"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generate a random GID
$gid = rand(1000000, 99999999);

// Get data from form and sanitize
$roll_no = $_POST['roll_no'] ?? '';
$name = $_POST['name'] ?? '';
$department = $_POST['department'] ?? '';
$year = $_POST['year'] ?? '';
$start = $_POST['start'] ?? '';
$end = $_POST['end'] ?? '';
$stime = $_POST['stime'] ?? '';
$etime = $_POST['etime'] ?? '';
$reason = $_POST['reason'] ?? '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO students (gid, roll_no, name, department, year, sdate, edate, stime, etime, reason) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $gid, $roll_no, $name, $department, $year, $start, $end, $stime, $etime, $reason); // Corrected to match types


if ($stmt->execute()) {
    echo '<script> alert("Gatepass Submitted");
    window.location.href="gatepass.php";</script>';
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
