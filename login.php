<html>

  <head>
  <link rel="icon" type="image/x-icon" href="logo.ico">
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.9">
    <link rel="icon" type="image/x-icon" href="img\organic.ico">
    <link rel="stylesheet" href="login.css">
  </head>
  
  <style>
    body {
      background-image: url('kongu.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }


  </style>

  <body>

<h1><center>Kongu Arts and Science College</center></h1> 
    <div id="navbar">
            <a href="index.php">Home</a>
            <a href="admin/admin.php">Admin Login</a>
            <a class="active" href="login.php">Student Login</a>
            <a href="register.php">Register</a>
      </div><br><br><br>

     <div class="login-container">
        <h2>Login</h2><br>
        <form class="login-form" action="login1.php" method="post">
            
            <div class="form-group">
                <label for="username"><span class="required"></span>Username</label>
                <input type="number" id="mobile" name="mobile" placeholder="Enter the Mobile No" required>

            </div>
            <div class="form-group">
                <label for="password"><span class="required"></span>Password</label>
                <input type="password" id="password" name="password" placeholder="Enter the Password" required>
            </div>
            <a href="forgot.php" class="forgot">Forgot Password?</a>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <a href="register.php" class="create-account-btn">Create an Account</a>
      </div>

    


   
  </body>
</html>