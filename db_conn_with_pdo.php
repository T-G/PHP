<?php

// Check if PDO driver is installed
// if (!defined('PDO::ATTR_DRIVER_NAME')) {
//     echo 'PDO unavailable';
// } else {
//         echo "PDO available \n";
// }

// DB server conection details
$servername = "localhost";
$username = "root";
$password = "mypassword";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
    // Create database
    $sql = "CREATE DATABASE myDbPdo";
    $conn->exec($sql);
    echo "Database created successfully <br/>";

} catch (PDOException $e) {
    
    echo "Connection failed: {$e->getMessage()}";

}

$conn = null;

?>