<?php
    //Open a file named "data.txt" for writing
    //nese file nuk ekziston, krijohet nje i ri me te njejtin emer
    //nese file ekziston, mbishkruhet kontenti apo te dhenat ne file dhe file paraprak fshihet

    //$myfile = fopen("data.txt", "w");

    //w - e qel file per read and write, nese nuk ekziston e krijon nje te ri
    //r - eshte vetem read only mode
    //a - eshte vetem read only mode dhe pointer shkon ne fund te fillit 

    //w+ -
    //r+ file eshte open ne read and write mode 

    $filename = "data.txt";
    $myfile = fopen($filename, "w");
    $myText = "Hello there write this in the data.txt";
    fwrite($myfile, $myText);

    $filename2 = "data2.txt";
    $myfile2 = fopen($filename2, "w");
    $myText2 = "Hello there write this in the data2.txt";
    fwrite($myfile2, $myText2);

    $filename3 = "data3.txt";
    $myfile3 = fopen($filename3, "a+");
    $myText3 = "Hello there write this in the data3.txt";
    fwrite($myfile3, $myText3);

    

?>