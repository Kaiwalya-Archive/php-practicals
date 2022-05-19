<?php 

    //Use 'array' keyword to declare the array
    $arr = array("A", "B", "C", "D");

    //No in-built length method 
    $length = count($arr);

    for($i=0; $i < $length; $i++) {
        echo $arr[$i]."\n";
    }

    $arr[0] = "Z";

    echo "A changed to ".$arr[0]."\n";
?>