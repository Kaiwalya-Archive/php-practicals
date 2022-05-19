<?php 

    $arr = array("A", "B", "C");

    $serialized = serialize($arr);
    print_r($serialized. "\n");

    $unserialized = unserialize($serialized);
    print_r($unserialized);
?>