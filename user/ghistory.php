<html>
    <head>  
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.9">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Gatepass History</title>
    </head>

    <style>
        
        body {
        background-image: url('../img/.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .head{
    position: relative; 
    top: 10px; 
    font-size: 24px;
    color:rgb(47, 255, 64); 
    text-align:left; 
    
  }

  .header {
      padding: 7px;
      text-align: center;
  }

  .logo {
      margin: 10px;
      float:left;
      height: 150px;
      width: 150px; 
      margin-bottom: 20px; 
      border-radius : 80px;
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
  h1{
      text-align:center;
    }

    button{
      background-color: #39a706;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    .navbar a{
    position: relative; 
    top: 0px; 
    display: inline-flex;
    text-decoration: none;
    padding: 10px 14px;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: right;
  }

  .navbar a:hover{
      background-color: #bcffab;
      color: black;
  }
  .navbar .active{
    background-color: #bcffab;
    color: black;
  }

  #mySidenav a {
        position: fixed;
        right: -110px;
        transition: 0.3s;
        padding: 15px;
        width: 120px;
        text-decoration: none;
        font-size: 20px;
        color: white;
        border-radius: 10px 10px 10px 10px;
    }

    #mySidenav a:hover {
        right: 0;
    }
  
  #blog {
        top: 60px;
        background-color: green;
    }

    #projects {
        top: 120px;
        background-color: green;
    }

    #contact {
        top: 180px;
        background-color: green;
    }
    .table-link {
      background-color: rgb(47, 255, 64);
      padding: 10px 14px;
      border-radius: 5px;
      color : black;
      text-decoration : none;
        }
        .table-link:hover{
          background-color: green;
          color: white;
        }

        .image{
      width: 50px;
      height: 40px;
    }
    .back{
      text-decoration: none;
      background-color: rgb(47, 255, 64);
      margin-left: 50%;
      padding: 10px 14px;
      border-radius: 5px;
      color: black;
    }
    .back:hover{
      background-color: green;
      color: white;
    }
  </style>
    <body>


    <div class="container">
    <h1>Gatepass History</h1>

        <?php
        session_start();
            include("db_connect.php");
            $sql = "SELECT * FROM students WHERE roll_no={$_SESSION['rno']} ORDER BY reg_date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            
              echo "<div style='overflow-x:auto;'>";
              echo "<table>";
                    echo "<tr>
                          <th>Gatepass Id</th>
                          <th>Roll No</th>
                          <th>Student Name</th>
                          <th>Department</th>
                          <th>Year</th>
                          <th>Starting Time</th>
                          <th>Starting Date</th>
                          <th>Ending Time</th>
                          <th>Ending Date</th>
                          <th>Status</th>
                          <th>Download</th>
                        </tr>";

                    while ($row = $result->fetch_assoc()){
                        echo "<tr>
                              <td>". $row["gid"] ."</td>
                              <td>" . $row["roll_no"] ."</td>
                              <td>" . $row["name"] . "</td>
                              <td>" . $row["department"] . "</td>
                              <td>" . $row["year"] . "</td>
                              <td>" . $row["stime"] . "</td>
                              <td>" . $row["sdate"] . "</td>
                              <td>" . $row["etime"] . "</td>
                              <td>" . $row["edate"] . "</td>
                              <td style='color: " . ($row['status'] == 'Approved' ? 'green' : ($row['status'] == 'Rejected' ? 'red' : 'black')) . ";'>" . $row['status'] . "</td>
                              <td><a href='../pdf/print-details.php?gid=".$row["gid"]." 'target=_blank class='table-link'><span class='material-symbols-outlined'>download</span></a></td>
                              </tr>";
                    }
                echo "</table>";
                echo "</div><br><br>";
            }
        
          else 
            {
              echo '<center><h2>You Are not Applyed the Gatepass</center></h2>';
            }
        ?>
            <a href="index.php" class="back">Home</a><br><br>
  </div>
  </div>
</body>
</html>
