<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE >
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>WELCOME</title>
</head>
<body id="welcomeBody" >
  <div class="container" id="welcomeDIV">
    <?php echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>"; ?>   
    <a i ="logout" href="logout.php">Logout</a>
</div>
</body>
</html>