<?php
echo "Indexed Array \n ";

$fruits = array("Kiwi", "Cherry", "Apple", "Orange");

for($i=0;$i<count($fruits);$i+=1){
    echo "$fruits[$i] = $i \n";
}

echo "Associative Array \n";

$phone = array("Tim"=>434834,"Phobe"=>34343434,"Sara"=>343434343);

foreach ($phone as $val){
    echo " $val \n";
}

echo "Multidiemensional Array \n";
       
$multi = array(1,2,3,array(4,5,6));

for($i=0;$i<count($multi);$i+=1){
    echo "$i = $multi[$i] \n";
}



?>