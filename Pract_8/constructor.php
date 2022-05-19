<?php 

    class Fruit {
        public $name;
        public $color;
        public $taste;

        public function __construct($nm, $col, $t) {
            $this->name = $nm;
            $this->color = $col;
            $this->taste = $t;
        }

        //You have to do $this->name to access the variable you can't simply do $name
        public function showInfo() {
            echo "This is ".$this->name. " of color ".$this->color." that tastes ".$this->taste."\n";
        }
    }

    $apple = new Fruit("Apple", "Red", "Sweet");
    $apple->showInfo();

?>