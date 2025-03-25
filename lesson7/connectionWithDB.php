<?php
    $host="localhost";
    $user="root";
    $pass="";

    try{
    $conn = new PDO("mysql:host=$host", $user, $pass);
    echo "Connected to database";
    $sql = "create databse lorisi"
    $conn->exec($sql);
    }catch(Exception $e){
        echo "not conected";
    }
?>