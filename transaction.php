<?php

require "./config.php";

try {

    $conn = new PDO(DBCONN, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Begin Transaction
    $conn->beginTransaction();
    
    // Our SQL statement

    $sql1 = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES('Jane', 'Doe', 'jd@email.com')";
    
    $sql2 = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES('John', 'Doe', 'johndoe@email.com')";
    
    $sql3 = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES('Lucy', 'Pandy', 'lp@email.com')";

    $conn->exec($sql1);
    $conn->exec($sql2);
    $conn->exec($sql3);

    // Commit the transaction

    $conn->commit();
    echo "New records created successfully.";

} catch (PDOException $e) {
    
    // rollback the transaction if something failed
    $conn->rollBack();

    echo "Error: " . $e->getMessage();

}

$conn = null;

?>