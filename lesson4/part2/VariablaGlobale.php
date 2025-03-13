<?php
    $x = 5;
    function VariablaLokale(){
        global $x;
        $y = 10;
        echo $x;
        echo $y;
    }
    VariablaLokale();
?>
