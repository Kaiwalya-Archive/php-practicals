<?php 

    $str = "Hello this is a test string";

    //Calculating length of the string.
    echo strlen($str)."\n";

    //Calculating length of the word without using predefined function
    $str_len = strlen($str);
    $words=1;

    for ($i=0; $i < $str_len; $i++) {
        if ($str[$i] == " ") {
            $words++;
        }
    }

    echo "There are ".$words." words in above string \n";
?>