<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$firstname = $_POST['firstname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$yos = $_POST['yos'];
$department= $_POST['department'];
$mobile = $_POST['mobile'];
$rno = $_POST['rno'];
$password = $_POST["password"];

// Check if username already exists
$query = "SELECT * FROM users WHERE mobile='$mobile'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<script>alert("Mobile Number already exists.")
    window.location.href = "register.php";</script>';
} else {
    // Insert new user into the database
    $query = "INSERT INTO users (firstname,  gender, age, yos, department, mobile, rno, password) VALUES ('$firstname', '$gender', '$age', '$yos', '$department', '$mobile','$rno', '$password')";
    if (mysqli_query($conn, $query)) {
        $_SESSION["mobile"] = $mobile;
        echo'
        <script>alert("Registration successfull!!!")
	window.location.href = "login.php";</script>
        ';        
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

