<html>

  <head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.9">
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <link rel="stylesheet" href="admin.css">
  </head>
  
  <style>
    body {
      background-image: url('../kongu.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }


  </style>

  <body>

<h1><center>Kongu Arts and Science College</center></h1> 

     <div class="login-container">
        <h2>Admin Login</h2><br>
        <form class="login-form" action="admin1.php" method="post">
            
            <div class="form-group">
                <label for="username"><span class="required"></span>Username</label>
                <input type="number" id="mobile" name="mobile" placeholder="Enter the Mobile No" required>

            </div>
            <div class="form-group">
                <label for="password"><span class="required"></span>Password</label>
                <input type="password" id="password" name="password" placeholder="Enter the Password" required>
            </div>
            <button type="submit" class="login-btn">Admin Login</button>
        </form>
      </div>

    


   
  </body>
</html>