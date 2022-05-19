<?php

echo "\n While Loop \n";

$num = 0;
 
while($num<10){
    echo "$num \t";
    $num += 1;
}

echo "\n Do while Loop \n";

$no = 10;

do{
    echo "$no \t";
    $no -= 1;
}while($no>0);

echo "\n For Loop \n";

for($i=0;$i<=20;$i+=2){
    echo " $i \t";
}

echo "\n For Each Loop \n";

$fruits = array("Kiwi","Orange","Apple");

foreach ($fruits as $ele){
    echo "$ele \t";
}



?>