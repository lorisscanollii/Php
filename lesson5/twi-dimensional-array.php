<?php
    $dogs = array(array("hello", "Mexico", 20) , array("hello2", "Mexico2", 20),  array("hello3" , "Mexico3" , 20));

    /*echo $dogs[0][0] . $dogs[0][1] . $dogs[0][2] ,"<br>";
    echo $dogs[1][0] . $dogs[1][1] . $dogs[1][2] ,"<br>";
    echo $dogs[2][0] . $dogs[2][1] . $dogs[2][2] ,"<br>";*/

    for($row = 0; $row<3; $row++){
        echo "<p>Row number $row </p>";
        echo "<ul>";

        for($col=0; $col<3; $col++){
            echo "<li>" .$dogs[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    for($i = 0; $i<3; $i++){
        echo $i ."<br>";
        for($j = 0; $j<3; $j++){
            echo $j ."numri brena elementit <br>";
    }}
?>