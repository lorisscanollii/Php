<?php
    $host = "localhost";
    $db = "dblorisi";
    $user = "root";
    $pass = "";

    try{
       $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

       $username = "lorisi";
       $password = "12345678";

       $sql = "INSERT INTO users (id,username, password) VALUES (1, '$username', '$password')";

       $pdo ->exec($sql);
       echo "User created";
       
    }catch(Exception $e){
        echo "Error" . $e->getMessage();
    }
?>    