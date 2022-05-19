<?php

class Rectangle{

    public $len = 5;
    public $bre = 5;


    function __construct($l,$b){
        $this -> len = $l;
        $this -> bre = $b;
    }
    
    function area(){
        $area1 = $this->len*$this->bre;
        return $area1;
    }
}

$length=readline("Enter length: ");
$breadth=readline("Enter breadth: ");
$rect =new Rectangle($length,$breadth);
print_r($rect);
print_r(get_class_vars(Rectangle));
print_r(get_class_methods(Rectangle));
print_r(get_object_vars($rect));
print_r(get_class($rect));

?>