<?php

class Fruits{

    public function intro(){
        echo "Hello Fruits Fruits Fruits...";
        echo "\n";
    }
}

class Apple extends Fruits{

    public function info(){
        echo "And I'm Apple";
    }
}

$obj =new Apple;
$obj->intro();
$obj->info();

?>