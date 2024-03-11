<?php

$weight = (int)115.5;
// echo $weight;

$car = (object)[
    "id" => 1,
    "model" => "Neta V",
    "brand" => "Neta",
    "type" => "EV"

];

// var_dump($car);
// print($car ->model);

function area(int $w ,int $h): int{
    return $w * $h;
};

// print(area("a","b"));
// print(area(15,50));

function sum(array $arr) :int{
    return array_sum($arr);
}

// print(sum([1,2,3,4,5]));
// print(sum(1,2,3,4,5));
