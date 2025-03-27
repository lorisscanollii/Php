<?php
    $host = "localhost";
    $db = "dblorisi";
    $user = "root";
    $pass = "";

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $sql = "ALERT TABLE products ASS email VARCHAR(255)";
        
        $pdo->exec($sql);
        echo "Table is created is created successfully";
    }catch(Exception $e){
        echo "Error" . $e->getMessage();
    }
?>