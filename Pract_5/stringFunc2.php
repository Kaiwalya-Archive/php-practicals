<?php 

    $str = "This is a test string, don't mind it";
    $cmp_string = "Can you really compare me?";

    echo strlen($str)."\n";
    echo str_word_count($str)."\n";
    echo strrev($str)."\n";
    echo strpos($str, "mind")."\n";
    echo str_replace($str, "string", "text")."\n";
    echo ucwords($str)."\n";
    echo strtoupper($str)."\n";
    echo strtolower($str)."\n";
    echo strcmp($str, $cmp_string)."\n"; //Returns 0 if they both are equal

?>