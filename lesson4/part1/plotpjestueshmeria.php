<?php
    function plot($n){
        if (($n%2)==0){
            return "$n numri eshte i plotpjestushem me 2";
        }else{
            return "$n numri nuk eshte i plotpjestushem me 2";
        }
    }
    print_r(plot(10))
?>