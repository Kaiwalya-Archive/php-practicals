<?php 

    class Fruits {
        public $flavour;
        public $category = "Fruit";
    }
    
    class Pineapple extends Fruits {

        public $color = "Yellow";

        public function getPineappleInfo() {
            $this->flavour="Sweet";
            echo "Pineapple is ".$this->flavour."\n";
            echo "Pineapple is of ".$this->color." color \n";
            echo "Pinapple is a ".$this->category."\n";
        }
    }

    $pa = new Pineapple();
    $pa->getPineappleInfo();
?>