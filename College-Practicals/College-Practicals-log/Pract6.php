<?php

function wel($fname, $lname){
    echo "Hello {$fname} {$lname}. Welcome to PHP";
}

$fn = readline("Enter your first name: ");
$ln = readline("Enter your last name: ");

wel($fn, $ln);

?>