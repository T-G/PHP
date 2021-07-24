<?php

require "./config.php";
    
try {

    $conn = new PDO(DBCONN, USERNAME, PASSWORD);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";


    $conn->exec($sql);
    echo "DB Connected successfully" . "<br>";
    echo "Table MyGuests created successfully" . "<br>";

    } catch (PDOException $e) {      
        echo "Connection to Database failed! {$sql} <br> ERROR: {$e->getMessage()}";
    }

    $conn = null;

?>