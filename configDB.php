<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "registration";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn)
{
    die("<script>alert('Failed.')</script>");
}

?>