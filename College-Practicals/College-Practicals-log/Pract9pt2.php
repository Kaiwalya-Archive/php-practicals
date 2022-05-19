<?php

$fruits = array('Orange','Kiwi','Apple');

$s = serialize($fruits);
print("Serialize Data: ".$s);
$u = unserialize($s);
print("Unserialize Data: ".$u);


?>