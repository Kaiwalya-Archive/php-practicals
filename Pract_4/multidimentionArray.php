<?php 

    $arr = array(
        array("Apple", "Mango", "Pineapple"),
        array(1, 2, 3),
        array(true, false),
        array("Orange", "Green", "Blue")
    );

    $row_count = count($arr);

    for ($i = 0; $i < $row_count; $i++) {

        $col_count = count($arr[$i]);
        for ($j = 0; $j < $col_count; $j++) {
            echo $arr[$i][$j]." ";
        }
        echo "\n";
    }

?>