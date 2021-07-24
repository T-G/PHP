<?php
include "config.php";

class MyDbConnection {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connectToDb() {
        try {
            $conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            
            // Set PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "DB Connected successfully";
            return $conn;
            // Create database
            // $sql = "CREATE DATABASE myDbPdo";
            // $conn->exec($sql);
            // echo "Database created successfully <br/>";
        
        } catch (PDOException $e) {
            
            echo "Connection failed: {$e->getMessage()}";
        
        }
        // $conn = null;

    }
}
?>