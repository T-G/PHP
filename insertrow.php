<?php

require "./config.php";
    
try {

    $conn = new PDO(DBCONN, USERNAME, PASSWORD);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $sql = "INSERT INTO MyGuests(firstname, lastname, email) 
            VALUES ('Oscar', 'Gomes', 'og@yahoo.com')";


    $conn->exec($sql);
    $last_id = $conn->lastInsertId();

    echo "New record created successfully. Last inserted Id is {$last_id}";

    } catch (PDOException $e) {      
        echo "Connection to Database failed! {$sql} <br> ERROR: {$e->getMessage()}";
    }

    $conn = null;

?>