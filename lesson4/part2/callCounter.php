<?php
    function callCounter(){
        static $count = 0;
        $count++;
        echo ("The current counter value is: $count <br>" );
    }
    callCounter();
    callCounter();
    callCounter();
?>
