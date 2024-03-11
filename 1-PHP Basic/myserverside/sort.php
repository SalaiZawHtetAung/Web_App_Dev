<?php

// $x = ["x","y","z","a","c",1,1.5,2,"+"];
// rsort($x);
// print_r($x);

$assoc = [
    "myName" => "Zaw Htet Aung",
    "myAge" => 30,
    "myJob" =>"Web developer",
    "gf" => 2,
    "isHandsome"  => "Yes",
];

asort($assoc);
ksort($assoc);
krsort($assoc);
arsort($assoc);

print_r($assoc);

