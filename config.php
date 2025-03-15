<?php

$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "kitabghar"; 
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ✅ SMTP Email Configuration
$smtp_username = "prabalshukla73@gmail.com"; // Gmail ID
$smtp_password = "gcvj wozp hhcp wmrj"; // Gmail App Password
$smtp_host = "smtp.gmail.com"; 
$smtp_port = 587; 

?>