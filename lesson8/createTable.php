<?php
    $host = "localhost";
    $db = "dblorisi";
    $user = "root";
    $pass = "";

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $sql = "CREATE TABLE  users(
        id INT(6) NOT NULL  PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password varchar(50) NOT NULL)";
        $pdo->exec($sql);
        echo "Table is created is created successfully";
    }catch(Exception $e){
        echo "Error" . $e->getMessage();
    }
?>