<?php


class Cat {


    function __construct(){

        $fav_food = "Fish";
        $fav_activity = "Sleeping";
        echo "Meow. I'm a Cat. I like {$fav_food} and my favorite activity is {$fav_activity}";
    }
}

$kitto = new Cat();

?>