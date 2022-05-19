<?php

echo "String Functions\n";

echo "Calculating string len without using strlen() \n";
$str = "Apples ";
$i = 0;
while ($str[$i] != " "){
    $i++;
}
echo $i;

echo "\n \n";
echo "String length = ".strlen($str);
echo "\n Lowercase = ".strtolower($str);
echo "\n Uppercase = ".strtoupper($str);
echo "\n String length = ".trim($str);
$str = "\n An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n",TRUE);

?>