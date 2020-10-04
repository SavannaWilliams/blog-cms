<?php
$dbServer = "localhost";
$dbUsername = "root"; // This is the same username as phpMYAdmin
$dbPassword = "root"; // This is the same password as phpMYAdmin
$dbName = "blog_cms";

// Create the connection
$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>