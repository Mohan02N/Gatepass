<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="logo.ico">
<title>Kongu</title>
<style>
        body {
            background-image: url('kongu.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #04AA6D;
color: white;
}

.active {
  background-color: #04AA6D;
  color: white;

}

</style>
</head>
<body>

<h1><center>Kongu Arts and Science College</center></h1> 
<ul>
  <li><a href="register.php">Register</a></li>
  <li><a href="login.php">Student Login</a></li>
  <li><a href="admin/admin.php">Admin Login</a></li>
  <li><a class="active" href="#about">Home</a></li>
</ul>

</body>
</html>


