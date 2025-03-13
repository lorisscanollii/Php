<?php
    $cars = array("Mercedes", "BMW", "Audi");
    array_pop($cars);
    array_push($cars,"hello");

    for($i=0; $i<3; $i++){
        echo $cars[$i];
        echo "<br>";
    }
?>