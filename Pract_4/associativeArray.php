<?php 

    $arr = array("Name" => "Kaiwalya", "Age" => 19, "Status" => "Student");

    //Simple access
    echo $arr["Name"]."\n";

    //Simple updation
    $arr["Age"] = 20;

    //Simple access
    echo $arr["Age"]."\n";

    //Iterating over the associative array
    foreach ($arr as $x => $x_assoc) {
        echo $x." is: ".$x_assoc."\n";
    }
?>