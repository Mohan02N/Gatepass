<html>
    <head>
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Kongu</title> 
       <link rel="stylesheet" href="css/event.css">
    </head>
<style>
    body {
      background-image: url('../kongu.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
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
        <?php
        session_start();
        ?>
<h1><center>Kongu Arts and Science College</center></h1> 

        <?php
            if (!isset($_SESSION['firstname']) and ($_SESSION['rno'])) {
                header('Location: ../login.php');
            }
            ?>

        <?php
         {
            echo "<div style='text-align: center;'>";
            echo "<h2>Welcome, {$_SESSION['firstname']} ! </h2>";
            echo "</div>";
        }
            ?>
<div id="navbar">
            <a href="logout.php">Logout</a>
            <a href="gatepass.php">Gatepass</a>
            <a href="ghistory.php">Gatepass History</a>
</div>
</body>

</html>

