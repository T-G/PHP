<?php
require "./config.php";
// Create Database 

$servername = "localhost";
$username = "root";
$password = "mypassword";

try {
    // $conn = new PDO(DBCONN);
    $conn = new PDO("mysql:host=$servername", $username, $password);

    
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection to MySQL is successfull..."."<br>";
    
    // Create database
    $sql = "CREATE DATABASE myDbPdo";
    
    $conn->exec($sql);
    
    echo "Database created successfully";

} catch (PDOException $e) {
    
    echo "Connection to Database failed! {$sql} <br> ERROR: {$e->getMessage()}";

}

$conn = null;

?>