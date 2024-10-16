<html>
    <head>
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Kongu</title> 
       <link rel="stylesheet" href=".css">
    </head>
<style>
    body {
      background-image: url('../kongu.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {

            color: white;
            background-color: green;
        }
        .container {
      max-width: auto;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      font-size: 18px;
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #4caf50;
      color: white;
    }

    select {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        padding: 5px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        appearance: none; /* Remove default styles in some browsers */
    }
    select::-ms-expand {
        display: none; /* Remove default arrow in IE Edge */
    }
    
    /* Style for the options container */
    select option {
        padding: 10px;
        font-size: 16px;
        background-color: #fff;
        color: #333;
    }
    
    /* Style for the options on hover */
    select option:hover {
        background-color: #ddd;
    }

    .btn-green {
        background-color: #4cae4c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
    }
    
    .btn-green:hover {
    background-color: Green;
    color: white;
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
  
    <body>

   <h1><center>Kongu Arts and Science College</center></h1>
   <?php
// Assuming you have established a database connection earlier

// Example connection settings
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

// Query to fetch data from 'events' table
$sql = "SELECT * FROM `students` ORDER BY `reg_date` DESC ";
$result = $conn->query($sql);

?>

<div id="navbar">
<a href="logout.php">Logout</a>
<a href="index.php">Home</a>

<div><br><br>
<div class="container">
    <h2><center>Gatepass Details</center></h2>
    
    <table>
        <tr>
            <th>S.No</th>
            <th>Gatepass Id</th>
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Department</th>
            <th>Year</th>
            <th>Starting Time</th>
            <th>Starting Date</th>
            <th>Ending Time</th>
            <th>Ending Date</th>
            <th>Reason</th>
            <th>Approve/Rejection</th>
            <th>Button</th>


        </tr>
        
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["sno"]."</td>";
            echo "<td>".$row["gid"]."</td>";
            echo "<td>".$row["roll_no"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["department"]."</td>";
            echo "<td>".$row["year"]."</td>";
            echo "<td>".$row["stime"]."</td>";
            echo "<td>".$row["sdate"]."</td>";
            echo "<td>".$row["etime"]."</td>";
            echo "<td>".$row["edate"]."</td>";
            echo "<td>".$row["reason"]."</td>";
            echo "<td> <form action='gatepass1.php' method='post'>
            <input type='hidden' name='gid' value='{$row["gid"]}'>
            <select name='order_status' required>
                <option></option>
                <option value='Approved' " . ($row['status'] == 'Approved' ? 'selected' : '') . ">Approved</option>
                <option value='Rejected' " . ($row['status'] == 'Rejected' ? 'selected' : '') . ">Rejected</option>
            </select></td>";
            echo "<td><button type='submit' class='btn-green'>Update</button>
            </td>";
            echo "</form>";
            echo "</tr>";
        }
        ?>
        
    </table>
    </div>

</body>
</html>

    </body>

</html>

