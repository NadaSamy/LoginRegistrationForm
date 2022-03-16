<?php 
include 'configDB.php';
session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if(isset($_POST["login"]))
{
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0)
  {
    $row = $result -> fetch_assoc();
    $_SESSION['username'] = $row["name"];
    header('Location: welcome.php');
  }
  else
  {
    $sql = "SELECT * FROM users WHERE email='{$email}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($email == $row["email"])
    {
      echo "<script>alert('Incorrect Password')</script>";
    }
    else
    {
      echo "<script>alert('Email does not exist')</script>";
    }

  }
}

?>
<!DOCTYPE >
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>User Login</title>
</head>
<body>
  
  <div class="container">
  <h1>Login</h1>
      <form class="inputForm" onsubmit="return validateForm()" method="POST">
          <div class="userInput">
              <input type="text" placeholder="Enter Email" id="mail" name="email">
            </div>

          <div class="userInput">
              <input type="password" placeholder = "Enter Password" id="pass" name="password">
          </div>

          <div class="userInput">
              <button id="loginButton" name="login">Login</button>
          </div>

          <p>Don't have an account? <a href="register.php">Register Here.</a></p>
  </div>
  <script src="loginJS.js"></script>
</body>
</html>