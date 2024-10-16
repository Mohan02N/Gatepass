<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: 'Times New Romance';
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        input[type="clock"],
        textarea {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4cae4c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: green;
        }

        #navbar a {
    margin: 5px;
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    border-radius: 5px;
}

#navbar a:hover {
    background-color: green;
    color: white;
}

#navbar a.active {
    background-color: green;
    color:white;
}
    </style>
</head>

<body>
<div id="navbar">
            <a href="logout.php">Logout</a>
            <a href="index.php">Home</a>
</div><br><br>

    <form action="gatepass1.php" method="POST">
    <h1>Gatepass Details</h1>
    <?php
        include("db_connect.php");
        session_start();
        $query = "SELECT * FROM users WHERE rno='{$_SESSION['rno']}'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()){
            echo "<h2>
        <label for='roll_no'>Roll No : ". $row["rno"] ." </label>
        <label for='name'>Name : ". $row["firstname"] ." </label>
        <label for='department'>Department :  ". $row["department"] ." </label>
        <label for='year'>Year: ". $row["yos"] ."</label></h2>

        <input type='hidden' name='roll_no' value='". $row['rno'] ."'>
        <input type='hidden' name='name' value='". $row['firstname'] ."'>
        <input type='hidden' name='department' value='". $row['department'] ."'>
        <input type='hidden' name='year' value='". $row['yos'] ."'>";
        }
    }
    $conn->close();
        ?>

        <label for="start">Starting Date:</label>
        <input type="date" id="start" name="start" required>

        <label for="stime">Starting Time:</label>
        <input type="time" id="stime" name="stime" required><br><br>

        <label for="end">Ending Date:</label>
        <input type="date" id="end" name="end" required>

        <label for="etime">Ending Date:</label>
        <input type="time" id="etime" name="etime" required><br><br>
        
        <label for="reason">Reason:</label>
        <textarea id="reason" name="reason" required></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
