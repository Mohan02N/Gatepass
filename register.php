<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=.8">
  <link rel="icon" type="image/x-icon" href="logo.ico">
  <link rel="stylesheet" href="reg.css">
  <title>Registration</title>
  <style>
    body {
      background-image: url('kongu.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
  </style>
</head>
<body>
<h1><center>Kongu Arts and Science College</center></h1> 

<div id="navbar">
            <a href="index.php">Home</a>
            <a href="login.php">Student Login</a>
            <a class="active" href="register.php">Register</a>
	<br><br><br>
</div><br>

<div class="register-container">
  <h2>Registration</h2>
  <form action="register1.php" method="post">
    <label for="firstname">Name <span class="required"></span></label>
    <input type="text" id="firstname" name="firstname" required>


    <label>Gender <span class="required"></span>
      <label class="container">Male
        <input type="radio" name="gender" value="Male">
        <span class="checkmark"></span>
      </label>

      <label class="container">Female
        <input type="radio" name="gender" value="Female">
        <span class="checkmark"></span>
      </label>

    </label>

    <label for="age">Age: <span class="required"></span></label>
    <input type="number" id="age" name="age" required>

    <label for="yos">Year of Study <span class="required"></span></label><b>Eg: I,II,III,IV Year</b><br>
    <input type="text" id="yos" name="yos" required>

    <label for="department">Department <span class="required"></span></label>
    <input type="text" id="department" name="department" required>

    <label for="mobile">Mobile No <span class="required"></span></label>
    <input type="number" id="mobile" name="mobile" required>

    <label for="rno">Register no: <span class="required"></span></label>
    <input type="number" id="rno" name="rno" required>

    <label for="password">Password <span class="required"></span></label>
    <input type="password" id="password" name="password"  required>


   <!-- Other form fields here -->

    <input type="submit" value="Register">
    <div class="button">
    <a href="login.php">Login</a>
  </div>
  </form>
</div>


</body>
</html>
