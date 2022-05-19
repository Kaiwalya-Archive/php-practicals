<?php

    echo "If Statment";

    $no = 20;
    
    if($no == 20){
        echo "The number is $no \n";
    }

    echo "If -Else Statment"; 

    $num = 20;
    $num2 = 10;

    if($num > $num2){
        echo "$num is greater \n";
    }
    else{
        echo "$num2 is greater \n";
    }

    echo "Switch Case Statment";

     $ans = 'y';

     switch($ans){
         case 'y': echo "User agreed \n";
         break;
         case 'n': echo "User didn't agreed \n";
         break;
         default:
         echo "User is too lazy to respond \n";
         break;
     }
 
 ?>