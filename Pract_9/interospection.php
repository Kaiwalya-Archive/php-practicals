<?php 

    class Fruit {
        public $name;
        public $color;
        public $season;

        public function __construct($n, $c, $s) {
            $this->name = $n;
            $this->color = $c;
            $this->season = $s;
        }

        public function showInfo() {
            echo "This is ".$this->name." and has ".$this->color." color and you can enjoy it in ".$this->season."\n";
        }
    }

    

    $mango = new Fruit("Mango", "yellow", "summer");
    $mango->showInfo();

    //Introspection classes, don't forget "" around class name
    print_r(get_class_vars("Fruit"));
    print_r(get_class_methods("Fruit"));
    print_r(class_exists("Fruit")."\n");
?>