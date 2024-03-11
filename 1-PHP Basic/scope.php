<?php

$x = "xxx";
const MY_NAME = "zaw htet aung";

function run(){

    global $x;
    $y = "yyy";

    static $z = 5;
    echo $z;
    $z++;
    // echo $y;
    // echo $x;
    // echo MY_NAME;
}

// echo $x;
run();
run();
run();